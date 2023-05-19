<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidate_experienceRequest;
use App\Http\Requests\UpdateCandidate_experienceRequest;
use App\Models\Candidate_experience;

class Admin_Candidate_experienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates_experience = Candidate_experience::all();

        return view('candidates_experience.index', compact('candidates_experience'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('candidates_experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCandidate_experienceRequest $request)
    {
        $request->validate([
            'name_old_company' => 'required',
            'position_old_company' => 'required',
            'location_old_company' => 'required',
            'start_work' => 'required',
            'end_work' => 'required',
            'candidate_full_name_id' => 'required'
       ]);

        Candidate_experience::create($request->all());

        return redirect()->route('candidates_experience.index')->with('success','Candidate_experience created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate_experience $candidate_experience)
    {
        return view('candidates_experience.show',compact('candidate_experience'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate_experience $candidate_experience)
    {
        return view('candidates_experience.edit',compact('candidate_experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidate_experienceRequest $request, Candidate_experience $candidate_experience)
    {
        $request->validate([
            'name_old_company' => 'required',
            'position_old_company' => 'required',
            'location_old_company' => 'required',
            'start_work' => 'required',
            'end_work' => 'required',
            'candidate_full_name_id' => 'required',
        ]);

        $candidate_experience->update($request->all());

        return redirect()->route('candidates_experience.index')->with('success','Candidate_experience updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate_experience $candidate_experience)
    {
        $candidate_experience->delete();

        return redirect()->route('candidates_experience.index')
            ->with('success','Candidate_experience deleted successfully');
    }
}
