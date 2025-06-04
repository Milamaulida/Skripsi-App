<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\NrClass;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
    $data = Subject::all();
    return view('learning_materials_data', compact('data'));
    }

    public function teacherMaterials()
    {
        $data = Subject::all();
        return view ('teacher_materials', compact('data'));
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

    public function show($class_id)
    {
        $data = Subject::where('class_id',$class_id)->get();
        return view('learning_materials_data', compact('data'));
    }

    public function showContent($class_id, $id)
    {
                $data = Subject::where([
            ['class_id', '=', $class_id],
            ['id', '=', $id]
        ])->firstOrFail();

        $allSubjectsInClass = Subject::where('class_id', $class_id)->orderBy('id')->get();

        $ids = $allSubjectsInClass->pluck('id')->toArray();
        $currentIndex = array_search($id, $ids);

        return view('content_of_the_materials', [
            'data' => $data,
            'prevId' => $ids[$currentIndex - 1] ?? null,
            'nextId' => $ids[$currentIndex + 1] ?? null,
            'class_id' => $class_id,
        ]);
    }

       public function showMaterialsByClass($class_id)
    {
        $data = Subject::where('class_id', $class_id)->get();
        return view('teacher_materials', compact('data'));
    }

    public function edit(string $id)
    {
        
    }


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
