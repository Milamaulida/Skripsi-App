<?php
namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\NrClass;
use App\Models\Question;
use Illuminate\Http\Request;

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
        $data = Exam::with('nrclass')->get();
        return view('evaluasi_student', compact('data'));
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

    public function showQuestion($examId, $number = 1)
    {
        $exam = Exam::with('nrclass')->findOrFail($examId);

        $questions = Question::with('answers')
            ->where('exam_id', $examId)
            ->get();

        $question = $questions[$number - 1] ?? null;

        if (! $question) {
            return redirect()->route('exam.start', $examId)->with('error', 'Soal tidak ditemukan.');
        }

        return view('start_evaluation', [
            'exam'     => $exam,
            'question' => $question,
            'number'   => $number,
            'total'    => $questions->count(),
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $exams = Exam::find($id);
        if (isset($request->class_id)) {
            $exams->class_id = $request->class_id;
        }

        if (isset($request->type)) {
            $exams->type = $request->type;
        }

        $exams->save();
        return $exams;
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
}