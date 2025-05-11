<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
{
    $subjects = Subject::all();
    return view('materi.index', compact('subjects'));
}
    public function dataMateri()
    {
        $data = Subject::with('nrclass')->get();
        return view('data_materi', compact('data'));
    }
    //Data Materi Kelas 7
    public function materiKelas7()
    {
        $data = Subject::with('nrclass')->get();
        return view('materi_kelas_7', compact('data'));
    }

      //Data Materi Kelas 8
      public function materiKelas8()
      {
          $data = Subject::with('nrclass')->get();
          return view('materi_kelas_8', compact('data'));
      }

        //Data Materi Kelas 9
    public function materiKelas9()
    {
        $data = Subject::with('nrclass')->get();
        return view('materi_kelas_9', compact('data'));
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

    public function show($id)
    {
        $data = Subject::findOrFail($id);
    }

    public function showKelas7($id)
    {
        $data = Subject::findOrFail($id);
        return view('isi_materi_kelas_7', compact('data'));
    }
    
    public function showKelas8($id)
    {
        $data = Subject::findOrFail($id);
        return view('isi_materi_kelas_8', compact('data'));
    }

    public function showKelas9($id)
    {
        $data = Subject::findOrFail($id);
        return view('isi_materi_kelas_9', compact('data'));
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
