<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $data = Role::paginate(10);
        return view('',compact('data'));
    }
    public function create(Request $request)
    {
        $roles =new Role();
        $roles->name = $request->name;
        $roles->save(); 
        return $roles;
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
        return Role::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $roles = Role::find($id);
        if (isset($request->name)) $roles->name = $request->name;
        $roles->save();
        return $roles;
    }

    public function destroy($id)
    {
        $roles = Role::find($id);
        $roles->delete();
    }

}
