<?php

namespace App\Http\Controllers;

use App\Models\MyClass;
use Illuminate\Http\Request;

class MyClassController extends Controller
{
    public function index()
    {
        $classes = MyClass::get();
        return $classes;
    }
    public function create(Request $request)
    {
        $classes =new MyClass();
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
        return MyClass::findOrFail($id);
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
        $classes = MyClass::find($id);
        if (isset($request->name)) $classes->name = $request->name;
        $classes->save();
        return $classes;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $classes = MyClass::find($id);
        $classes->delete();
    }
}
