<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::get();
        return $exams;
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
