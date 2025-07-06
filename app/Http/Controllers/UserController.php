<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //Index Utama
    public function index(Request $request)
    {
        dd($request->all());
        $data = User::paginate(10);
        return view ('managemen_akun',compact('data'));
    }
    public function managementAkun()
    {
        $data = User::paginate(10);
        return view('admin.UserManagement.index',compact('data'));
    }
    //Data Guru
    public function dataGuru()
    {
        $data = User::where('role_id', 3)->paginate(10);
        return view('admin.Guru.index', compact('data'));
    }
    //Data Siswa
    public function dataSiswa()
    {

        $data = User::where('role_id', 2)->paginate(10);
        return view('admin.Siswa.index',compact('data'));
    }

    public function create(Request $request)
    {
        $users =new User();
        $users->class_id = $request->class_id;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->phone = $request->phone;
        $users->identification_number = $request->identification_number;
        $users->role_id = $request->role_id;
        $users->status = $request->status;
        $users->birth_date = $request->birth_date;
        $users->address = $request->address;
        $users->image_path = $request->image_path;
        $users->save();
        return $users;
    }

    public function store(Request $request)
    {

    }

    public function show(string $id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
       $users = User::find($id);
       isset($request->class_id) && $users->class_id = $request->class_id;
       isset($request->name) && $users->name = $request->name;
       isset($request->email) && $users->email = $request->email;
       isset($request->password) && $users->password = $request->password;
       isset($request->phone) && $users->phone = $request->phone;
       isset($request->identification_number) && $users->identification_number = $request->identification_number;
       isset($request->role_id) && $users->role_id = $request->role_id;
       isset($request->status) && $users->status = $request->status;
       isset($request->birth_date) && $users->birth_date = $request->birth_date;
       isset($request->address) && $users->address = $request->address;
       isset($request->image_path) && $users->image_path = $request->image_path;
       $users->save();
       return $users;
    }
    public function destroy($id)
    {
     $users = User::find($id);
     $users->delete();
    }
}