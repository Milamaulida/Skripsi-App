<?php

namespace App\Http\Controllers;

use App\Models\ValueExam;
use Illuminate\Http\Request;

class ValueExamController extends Controller
{
    public function index()
    {
        $valueExams = ValueExam::get();
        return $valueExams;
    }
    public function create(Request $request)
    {
        $valuesExams =new valueExam();
        $valuesExams->user_id = $request->user_id;
        $valuesExams->exam_id = $request->exam_id;
        $valuesExams->score = $request->score;
        $valuesExams->exam_date = $request->exam_date;
        $valuesExams->save(); 
        return $valuesExams;
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
        return ValueExam::findOrFail($id);
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
    public function update(Request $request, string $id)
    {
        $valueExams = ValueExam::find($id);
        if(isset($request->user_id)) $valueExams->user_id = $request->user_id;
        if (isset($request->exam_id)) $valueExams->exam_id = $request->exam_id;
        if(isset($request->score)) $valueExams->score = $request->score;
        if (isset($request->exam_date)) $valueExams->exam_date = $request->exam_date;
        $valueExams->save();
        return $valueExams;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $valueExams = ValueExam::find($id);
        $valueExams->delete();
    }
}
