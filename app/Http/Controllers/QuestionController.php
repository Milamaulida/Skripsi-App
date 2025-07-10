<?php
namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index($exam_id)
    {
        $exam      = Exam::findOrFail($exam_id);
        $questions = Question::where('exam_id', $exam_id)->get();

        return view('teacher.Question.index', compact('exam', 'questions'));
    }

    public function create($exam_id)
    {
        $exam = Exam::findOrFail($exam_id);
        return view('teacher.Question.create', compact('exam'));
    }

    public function store(Request $request, $exam_id)
    {
        $request->validate([
            'question'       => 'required|string|max:255',
            'option_a'       => 'required|string',
            'option_b'       => 'required|string',
            'option_c'       => 'required|string',
            'option_d'       => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
        ]);

        Question::create([
            'exam_id'        => $exam_id,
            'question'       => $request->question,
            'option_a'       => $request->option_a,
            'option_b'       => $request->option_b,
            'option_c'       => $request->option_c,
            'option_d'       => $request->option_d,
            'correct_answer' => $request->correct_answer,
        ]);

        return redirect()->route('questions.index', ['exam_id' => $exam_id])
            ->with('success', 'Soal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Question::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($exam_id, $question_id)
    {
        $exam     = Exam::findOrFail($exam_id);
        $question = Question::findOrFail($question_id);

        return view('teacher.question.edit', compact('exam', 'question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $exam_id, $question_id)
    {
        $request->validate([
            'question'       => 'required|string|max:255',
            'option_a'       => 'required|string',
            'option_b'       => 'required|string',
            'option_c'       => 'required|string',
            'option_d'       => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
        ]);

        $question = Question::findOrFail($question_id);

        $question->update([
            'question'       => $request->question,
            'option_a'       => $request->option_a,
            'option_b'       => $request->option_b,
            'option_c'       => $request->option_c,
            'option_d'       => $request->option_d,
            'correct_answer' => $request->correct_answer,
        ]);

        return redirect()->route('questions.index', $question->exam_id)
            ->with('success', 'Soal berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($exam_id, $question_id)
    {
        $question = Question::findOrFail($question_id);

        if ($question->exam_id != $exam_id) {
            abort(403, 'Soal tidak sesuai dengan ujian.');
        }

        $question->delete();

        return redirect()->route('questions.index', $exam_id)
            ->with('success', 'Soal berhasil dihapus!');
    }

}