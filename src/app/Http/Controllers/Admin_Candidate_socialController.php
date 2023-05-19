<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidate_socialRequest;
use App\Http\Requests\UpdateCandidate_socialRequest;
use App\Models\Candidate_social;

class Admin_Candidate_socialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates_social = Candidate_social::all();

        return view('candidates_social.index', compact('candidates_social'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('candidates_social.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCandidate_socialRequest $request)
    {
        $request->validate([
            'social_links' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'candidate_full_name_id' => 'required',
        ]);

        Candidate_social::create($request->all());

        return redirect()->route('candidates_social.index')->with('success','Candidate_social created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate_social $candidate_social)
    {
        return view('candidates_social.show',compact('candidate_social'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate_social $candidate_social)
    {
        return view('candidates_social.edit',compact('candidate_social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidate_socialRequest $request, Candidate_social $candidate_social)
    {
        $request->validate([
            'social_links' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'candidate_full_name_id' => 'required',
        ]);

        $candidate_social->update($request->all());

        return redirect()->route('candidates_social.index')->with('success','Candidate_social updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate_social $candidate_social)
    {
        $candidate_social->delete();

        return redirect()->route('candidates_social.index')
            ->with('success','Candidate_social deleted successfully');
    }
}
