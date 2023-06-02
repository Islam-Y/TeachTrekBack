<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotosRequest;
use App\Http\Requests\UpdatePhotosRequest;
use App\Models\Photo;

class Admin_PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::all();

        return view('admin.photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.photos.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhotosRequest $request)
    {
        $request->validate([

        ]);

        Photo::create($request->all());

        return redirect()->route('admin.photos.index')->with('success','Photo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        return view('admin.photos.show',compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        return view('admin.photos.edit',compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhotosRequest $request, Photo $photo)
    {
        $request->validate([

        ]);

        $photo->update($request->all());

        return redirect()->route('admin.photos.index')->with('success','Photo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();

        return redirect()->route('admin.photos.index')
            ->with('success','Photo deleted successfully');
    }
}
