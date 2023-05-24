<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilesRequest;
use App\Http\Requests\UpdateFilesRequest;
use App\Models\File;

class Admin_FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = File::all();

        return view('files.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('files.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilesRequest $request)
    {
        $request->validate([

        ]);

        File::create($request->all());

        return redirect()->route('files.index')->with('success','File created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        return view('files.show',compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        return view('files.edit',compact('file'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilesRequest $request, File $file)
    {
        $request->validate([

        ]);

        $file->update($request->all());

        return redirect()->route('files.index')->with('success','File updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        $file->delete();

        return redirect()->route('files.index')
            ->with('success','File deleted successfully');
    }
}
