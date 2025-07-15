<?php
namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\ExamAnswer;
use App\Models\ExamResult;
use App\Models\NrClass;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function index()
    {
        $data = Exam::all();
        return view('teacher_evaluation', compact('data'));
    }

    public function selectClass()
    {
        $classes = NrClass::all();
        return view('teacher.exam.select-class', compact('classes'));
    }

    public function listByClass($class_id)
    {
        $class = NrClass::findOrFail($class_id);
        $exams = Exam::where('class_id', $class_id)->orderBy('order')->get();

        return view('teacher.exam.by-class', compact('exams', 'class'));
    }

    public function studentEvaluation()
    {
        $student = Auth::user();

        $data = Exam::with('nrclass')
            ->where('class_id', $student->class_id)
            ->orderBy('order')
            ->get()
            ->map(function ($exam) use ($student) {
                $exam->is_done = ExamResult::where('exam_id', $exam->id)
                    ->where('user_id', $student->id)
                    ->exists();
                return $exam;
            });

        return view('student.exam.evaluasi_student', compact('data'));
    }

    public function create(Request $request)
    {
        $classes = NrClass::all();

        $selectedClassId = $request->input('class_id');

        $maxOrder  = Exam::where('class_id', $selectedClassId)->max('order') ?? 0;
        $nextOrder = $maxOrder + 1;

        return view('teacher.exam.create', compact('classes', 'selectedClassId', 'nextOrder'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string',
            'description' => 'nullable|string',
            'class_id'    => 'required|exists:nr_class,id',
            'order'       => 'required|integer',
            'is_active'   => 'required|boolean',
        ]);

        $exam = Exam::create($request->all());

        return redirect()->route('exam.by-class', $exam->class_id)
            ->with('success', 'Exam berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Exam::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $exam    = Exam::findOrFail($id);
        $classes = NrClass::all();

        return view('teacher.exam.edit', compact('exam', 'classes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|string',
            'description' => 'nullable|string',
            'class_id'    => 'required|exists:nr_class,id',
            'order'       => 'required|integer',
            'is_active'   => 'required|boolean',
        ]);

        $exam = Exam::findOrFail($id);
        $exam->update($request->all());

        return redirect()->route('exam.by-class', $exam->class_id)
            ->with('success', 'Exam berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $exam = Exam::findOrFail($id);
        $exam->delete();

        return redirect()->route('exam.by-class', $exam->class_id)
            ->with('success', 'Exam berhasil ditambahkan!');

    }

    public function start($exam_id, $number = 1)
    {
        $student = Auth::user();

        $exam = Exam::findOrFail($exam_id);

        if ($student->class_id != $exam->class_id) {
            abort(403, 'Anda tidak diizinkan mengakses ujian ini.');
        }

        $existingResult = ExamResult::where('exam_id', $exam_id)
            ->where('user_id', $student->id)
            ->where('is_done', true)
            ->first();

        if ($existingResult) {
            return redirect()->route('exam.complete', $exam_id)
                ->with('info', 'Anda sudah menyelesaikan ujian ini.');
        }

        $question = Question::where('exam_id', $exam_id)
            ->orderBy('id')
            ->skip($number - 1)
            ->first();

        if (! $question) {
            return redirect()->route('exam.complete', $exam_id);
        }

        $studentAnswer = ExamAnswer::where('question_id', $question->id)
            ->whereHas('examResult', function ($query) use ($student, $exam_id) {
                $query->where('user_id', $student->id)
                    ->where('exam_id', $exam_id);
            })->first();

        $selectedOption = $studentAnswer->selected_option ?? null;

        return view('student.exam.start', compact('exam', 'question', 'number', 'selectedOption'));
    }

    public function answer(Request $request, $exam_id, $number)
    {
        $student  = Auth::user();
        $question = Question::findOrFail($request->question_id);

        $examResult = ExamResult::firstOrCreate(
            [
                'exam_id' => $exam_id,
                'user_id' => $student->id,
            ],
            [
                'started_at' => Carbon::now(),
            ]
        );

        $isCorrect = $question->correct_answer === $request->answer ? 1 : 0;

        ExamAnswer::updateOrCreate(
            [
                'exam_result_id' => $examResult->id,
                'question_id'    => $question->id,
            ],
            [
                'selected_option' => $request->answer,
                'is_correct'      => $isCorrect,
            ]
        );

        $exam           = Exam::withCount('questions')->findOrFail($exam_id);
        $totalQuestions = $exam->questions_count;

        $totalAnswered = ExamAnswer::where('exam_result_id', $examResult->id)->count();

        if ($totalAnswered >= $totalQuestions) {
            $correct = ExamAnswer::where('exam_result_id', $examResult->id)
                ->where('is_correct', 1)
                ->count();

            $score = ($totalQuestions > 0) ? ($correct / $totalQuestions) * 100 : 0;

            $examResult->update([
                'score'       => $score,
                'is_done'     => true,
                'finished_at' => Carbon::now(),
            ]);

            return redirect()->route('exam.complete', $exam_id);
        }

        return redirect()->route('exam.question', [$exam_id, $number + 1]);
    }

    public function complete($exam_id)
    {
        $student = Auth::user();

        $exam       = Exam::findOrFail($exam_id);
        $examResult = ExamResult::with('answers')->where('exam_id', $exam_id)
            ->where('user_id', $student->id)
            ->firstOrFail();

        $correctCount = $examResult->answers->where('is_correct', true)->count();
        $total        = $examResult->answers->count();
        $score        = $total > 0 ? round(($correctCount / $total) * 100) : 0;

        return view('student.exam.complete', compact('exam', 'score', 'correctCount', 'total'));
    }

    public function resultStudent()
    {
        $student = Auth::user();

        $results = ExamResult::with(['exam', 'exam.questions'])
            ->where('user_id', $student->id)
            ->where('is_done', true)
            ->orderByDesc('updated_at')
            ->get();

        return view('student.exam.results', compact('results'));
    }


    public function selectClassGrade()
    {
        $classes = NrClass::orderBy('name')->get();
        return view('teacher.exam-results.by-class', compact('classes'));
    }


    public function selectExam($class_id)
    {
        $class = NrClass::findOrFail($class_id);
        $exams = Exam::where('class_id', $class_id)->get();

        return view('teacher.exam-results.by-exam', compact('class', 'exams'));
    }

    public function viewResults($exam_id)
    {
        $exam = Exam::with(['nrclass', 'results.user'])->findOrFail($exam_id);

        return view('teacher.exam-results.results', [
            'exam' => $exam,
            'results' => $exam->results,
        ]);
    }

}
