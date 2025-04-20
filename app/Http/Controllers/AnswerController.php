<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::get();
        return $answers;
    }
    public function create(Request $request)
    {
        $answers =new Answer();
        $answers->question_id = $request->question_id;
        $answers->answer_text = $request->answer_text;
        $answers->is_correct = $request->is_correct;
        $answers->save(); 
        return $answers;
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
        return Answer::findOrFail($id);
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
        $answers = Answer::find($id);
        if (isset($request->question_id)) $answers->question_id = $request->question_id;
        if (isset($request->answer_text)) $answers->answer_text = $request->answer_text;
        if (isset($request->is_correct)) $answers->is_correct = $request->is_correct;
        $answers->save();
        return $answers;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $answers = Answer::find($id);
        $answers->delete();
    }
}
