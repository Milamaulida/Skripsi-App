<?php

namespace App\Http\Controllers;

use App\Models\NrClass;
use Illuminate\Http\Request;

class NrClassController extends Controller
{
    public function index()
    {
        $data = NrClass::paginate(10);
    }

    public function classStudent()
    {
        $data = NrClass::paginate(10);
        return view('class_student',compact('data'));
    }

    public function classTeacher()
    {
        $data = NrClass::paginate(10);
        return view('class_teacher',compact('data'));
    }

    public function classData()
    {
        $data = NrClass::paginate(10);
        return view('class_data',compact('data'));
    }

    public function create(Request $request)
    {
        $classes =new NrClass();
        $classes->name = $request->name;
        $classes->save(); 
        return $classes;
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
        return NrClass::findOrFail($id);
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
        $classes = NrClass::find($id);
        if (isset($request->name)) $classes->name = $request->name;
        $classes->save();
        return $classes;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $classes = NrClass::find($id);
        $classes->delete();
    }
}
