<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::get();
        return $questions;
    }
    public function create(Request $request)
    {
        $questions =new Question();
        $questions->exam_id = $request->exam_id;
        $questions->class_id = $request->class_id;
        $questions->type_of_question = $request->type_of_question;
        $questions->question= $request->question;
        $questions->save(); 
        return $questions;
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
        return Question::findOrFail($id);
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
        $questions = Question::find($id);
        if (isset($request->exam_id)) $questions->exam_id = $request->exam_id;
        if (isset($request->class_id)) $questions->class_id = $request->class_id;
        if (isset($request->type_of_question)) $questions->type_of_question = $request->type_of_question;
        if (isset($request->question)) $questions->question = $request->question;
        $questions->save();
        return $questions;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $questions = Question::find($id);
        $questions->delete();
    }
}
