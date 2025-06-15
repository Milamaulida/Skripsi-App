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
        return view('class_student', compact('data'));
    }

    public function classTeacher()
    {
        $data = NrClass::paginate(10);
        return view('class_teacher', compact('data'));
    }

    public function classData()
    {
        $data = NrClass::paginate(10);
        return view('class_data', compact('data'));
    }

    public function create(Request $request)
    {
        return view('add_class');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $class = new NrClass();
        $class->name = $name;
        $class->save();

        return redirect()->route('class.data')->with('success', 'Kelas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = NrClass::with('subjecttopic')->findOrFail($id);
        return view('materi_by_class', compact('data'));
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
        if (isset($request->name))
            $classes->name = $request->name;
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
