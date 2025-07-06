<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\NrClass;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function indexAdmin()
    {
    $data = Subject::all();
    return view('admin.Materi.index', compact('data'));
    }

    public function teacherMaterials()
    {
        $data = Subject::all();
        return view ('teacher.Materi.index', compact('data'));
    }

    public function create()
{
    $classes = NrClass::all();
    return view('teacher.Materi.create', compact('classes'));
}

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'class_id' => 'required|integer',
        'video_material' => 'nullable|string|max:255',
    ]);

    Subject::create([
        'title' => $request->title,
        'description' => $request->description,
        'class_id' => $request->class_id,
        'video_material' => $request->video_material,
    ]);

    return redirect('/teacher-materials')->with('success', 'Materi berhasil ditambahkan!');
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
        return view('teacher.Materi.index', compact('data'));
    }

    public function edit($id)
{
    $subject = Subject::findOrFail($id);
    $classes = NrClass::all();

    return view('teacher.Materi.edit', compact('subject', 'classes'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'class_id' => 'required|integer',
        'video_material' => 'nullable|string|max:255',
    ]);

    $subject = Subject::findOrFail($id);
    $subject->update([
        'title' => $request->title,
        'description' => $request->description,
        'class_id' => $request->class_id,
        'video_material' => $request->video_material,
    ]);

    return redirect('/teacher-materials')->with('success', 'Materi berhasil diupdate!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return redirect('/teacher-materials')->with('success', 'Materi berhasil dihapus!');
    }
}
