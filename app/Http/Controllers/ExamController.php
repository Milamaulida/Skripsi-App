<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $data = Exam::all();
        return view('teacher_evaluation', compact('data'));
    }
    public function studentEvaluation()
    {
        $data = Exam::with('nrclass')->get();
        return view('evaluasi_student', compact('data'));
    }
    

    public function create(Request $request)
    {
        $exams =new Exam();
        $exams->class_id = $request->class_id;
        $exams->type = $request->type;
        $exams->save(); 
        return $exams;
    }

    public function store(Request $request)
    {
        //
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

    if (!$question) {
        return redirect()->route('exam.start', $examId)->with('error', 'Soal tidak ditemukan.');
    }

    return view('start_evaluation', [
        'exam' => $exam,
        'question' => $question,
        'number' => $number,
        'total' => $questions->count()
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
    public function update(Request $request,$id)
    {
        $exams = Exam::find($id);
        if (isset($request->class_id)) $exams->class_id = $request->class_id;
        if (isset($request->type)) $exams->type = $request->type;
        $exams->save();
        return $exams;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $exams = Exam::find($id);
        $exams->delete();
    }
}
