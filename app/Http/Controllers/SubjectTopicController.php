<?php

namespace App\Http\Controllers;

use App\Models\SubjectTopic;
use Illuminate\Http\Request;

class SubjectTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SubjectTopic::with('class')->get();
        return view('subject_by_class', compact('data'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = SubjectTopic::with('subject')->findOrFail($id);
        return view('content_of_the_materials', compact('data'));
    }

    public function showByClass($class_id)
    {
        $data = SubjectTopic::where('class_id', $class_id)->get();
        return view('subject_by_class', compact('data'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
