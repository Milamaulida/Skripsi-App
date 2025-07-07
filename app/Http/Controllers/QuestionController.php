<?php
namespace App\Http\Controllers;

use App\Models\NrClass;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $selectedClassId = $request->get('class_id');
        $classes         = NrClass::all();

        $data = collect();

        if ($selectedClassId) {
            $data = Question::where('class_id', $selectedClassId)->get();
        }

        return view('teacher.Question.index', compact('classes', 'data', 'selectedClassId'));
    }

    public function create(Request $request)
    {
        $classes = NrClass::all();
        $classId = $request->get('class_id');

        return view('teacher.Question.create', compact('classes', 'classId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id'       => 'required|exists:nr_class,id',
            'question'       => 'required|string|max:255',
            'option_a'       => 'required|string',
            'option_b'       => 'required|string',
            'option_c'       => 'required|string',
            'option_d'       => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
        ]);

        Question::create([
            'class_id'       => $request->class_id,
            'question'       => $request->question,
            'option_a'       => $request->option_a,
            'option_b'       => $request->option_b,
            'option_c'       => $request->option_c,
            'option_d'       => $request->option_d,
            'correct_answer' => $request->correct_answer,
        ]);

        return redirect()->route('questions.index')->with('success', 'Soal berhasil ditambahkan!');
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
    public function edit(string $id)
    {
        $question = Question::findOrFail($id);
        $classes  = NrClass::all();

        return view('teacher.Question.edit', compact('question', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'class_id'       => 'required|exists:nr_class,id',
            'question'       => 'required|string',
            'option_a'       => 'required|string',
            'option_b'       => 'required|string',
            'option_c'       => 'required|string',
            'option_d'       => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
        ]);

        $question = Question::findOrFail($id);
        $question->update($request->only([
            'class_id', 'question', 'option_a', 'option_b', 'option_c', 'option_d', 'correct_answer',
        ]));

        return redirect()->route('questions.index', ['class_id' => $question->class_id])
            ->with('success', 'Soal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $classId  = $question->class_id;

        $question->delete();

        return redirect()->route('questions.index', ['class_id' => $classId])
            ->with('success', 'Soal berhasil dihapus.');
    }
}
