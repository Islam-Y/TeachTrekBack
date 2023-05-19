<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidate_full_nameRequest;
use App\Http\Requests\UpdateCandidate_full_nameRequest;
use App\Models\Candidate_full_name;

class Admin_Candidate_full_nameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates_full_name = Candidate_full_name::all();

        return view('candidates_full_name.index', compact('candidates_full_name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('candidates_full_name.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCandidate_full_nameRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'patronymic' => 'required',
            'candidate_id' => 'required',
        ]);

        Candidate_full_name::create($request->all());

        return redirect()->route('candidates_full_name.index')->with('success','Candidate_full_name created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate_full_name $candidate_full_name)
    {
        return view('candidates_full_name.show',compact('candidate_full_name'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate_full_name $candidate_full_name)
    {
        return view('candidates_full_name.edit',compact('candidate_full_name'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidate_full_nameRequest $request, Candidate_full_name $candidate_full_name)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'patronymic' => 'required',
            'candidate_id' => 'required',
        ]);

        $candidate_full_name->update($request->all());

        return redirect()->route('candidates_full_name.index')->with('success','Candidate_full_name updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate_full_name $candidate_full_name)
    {
        $candidate_full_name->delete();

        return redirect()->route('candidates_full_name.index')
            ->with('success','Candidate_full_name deleted successfully');
    }
}
