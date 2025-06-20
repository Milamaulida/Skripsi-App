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
        return view('account_management',compact('data'));
    }
    //Data Guru
    public function dataGuru()
    {
        return view('teacher_data', compact('data'));
    }
    //Data Siswa
    public function dataSiswa()
    {
        return view('student_data',compact('data'));
    }

    public function create(Request $request)  
    {
        $users =new User();
        $users->class_id = $request->class_id;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->email_verified_at = $request->email_verified_at;
        $users->password = $request->password;
        $users->phone = $request->phone;
        $users->role_id = $request->role_id;
        $users->birth_date = $request->birth_date;
        $users->address = $request->address;
        $users->remember_token = $request->remember_token;
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
       isset($request->email_verified_at) && $users->email_verified_at = $request->email_verified_at;
       isset($request->password) && $users->password = $request->password;
       isset($request->phone) && $users->phone = $request->phone;
       isset($request->role_id) && $users->role_id = $request->role_id;
       isset($request->birth_date) && $users->birth_date = $request->birth_date;
       isset($request->address) && $users->address = $request->address;
       isset($request->remember_token) && $users->remember_token = $request->remember_token;
       $users->save();
       return $users;
    }
    public function destroy($id)
    {
     $users = User::find($id);
     $users->delete();   
    }
}
