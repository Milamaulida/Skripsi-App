<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $data = Subject::with('nrclass')->get();
        return view('data_materi', compact('data'));
    }
    public function create(Request $request)
    {
        $subjects =new Subject();
        $subjects->title = $request->title;
        $subjects->description = $request->description;
        $subjects->teacher_id = $request->teacher_id;
        $subjects->class_id = $request->class_id;
        $subjects->save(); 
        return $subjects;
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
        return Subject::findOrFail($id);
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
        $subjects = Subject::find($id);
        if (isset($request->title)) $subjects->title = $request->title;
        if (isset($request->description)) $subjects->description = $request->description;
        if (isset($request->teacher_id)) $subjects->teacher_id = $request->teacher_id;
        if (isset($request->class_id)) $subjects->class_id = $request->class_id;
        $subjects->save();
        return $subjects;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subjects = Subject::find($id);
        $subjects->delete();
    }
}
