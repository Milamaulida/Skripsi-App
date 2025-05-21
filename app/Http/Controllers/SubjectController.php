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

    public function index_student(Request $request)
    {
        $data = Subject::get();
        return view('subject_student', compact('data'));
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

      public function materiKelas7Guru()
    {
        $data = Subject::with('nrclass')->get();
        return view('materi_kelas_7_guru', compact('data'));
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

    public function showByClass($id)
    {
        $kelas   = NrClass::findOrFail($id);
        $subjects = $kelas->subjects()->get();  // semua materi di kelas ini

        return view('materi_by_class', compact('kelas', 'subjects'));
    }
      public function showKelas7Guru($id)
    {
        $data = Subject::findOrFail($id);
        return view('isi_materi_kelas_7_guru', compact('data'));
    }

        public function showKelas8Guru($id)
    {
        $data = Subject::findOrFail($id);
        return view('isi_materi_kelas_8_guru', compact('data'));
    }

        public function showKelas9Guru($id)
    {
        $data = Subject::findOrFail($id);
        return view('isi_materi_kelas_9_guru', compact('data'));
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
