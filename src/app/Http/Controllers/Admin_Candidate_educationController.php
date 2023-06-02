<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidate_educationRequest;
use App\Http\Requests\UpdateCandidate_educationRequest;
use App\Models\Candidate_education;
use App\Models\Candidate_full_name;

class Admin_Candidate_educationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates_education = Candidate_education::all();

        return view('admin.candidates_education.index', compact('candidates_education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $candidates_full_name = Candidate_full_name::all()->pluck('name', 'id')->all();

        return view('admin.candidates_education.create', [
            'candidates_full_name' => $candidates_full_name,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCandidate_educationRequest $request)
    {
        $request->validate([
            'name_educational_university' => 'required',
            'location_educational_university' => 'required',
            'institute' => 'required',
            'year_of_release' => 'required',
            'candidate_full_name_id' => 'required'
        ]);

        Candidate_education::create($request->all());

        return redirect()->route('admin.candidates_education.index')->with('success','Candidate_education created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate_education $candidate_education)
    {
        return view('admin.candidates_education.show',compact('candidate_education'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate_education $candidate_education)
    {
        return view('admin.candidates_education.edit',compact('candidate_education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidate_educationRequest $request, Candidate_education $candidate_education)
    {
        $request->validate([
            'name_educational_university' => 'required',
            'location_educational_university' => 'required',
            'institute' => 'required',
            'year_of_release' => 'required',
            'candidate_full_name_id' => 'required'
        ]);

        $candidate_education->update($request->all());

        return redirect()->route('admin.candidates_education.index')->with('success','Candidate_education updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate_education $candidate_education)
    {
        $candidate_education->delete();

        return redirect()->route('admin.candidates_education.index')
            ->with('success','Candidate_education deleted successfully');
    }
}
