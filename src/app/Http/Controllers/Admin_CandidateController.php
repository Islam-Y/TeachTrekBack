<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use App\Models\Candidate;

class Admin_CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates = Candidate::all();

        return view('candidates.index', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCandidateRequest $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        Candidate::create($request->all());

        return redirect()->route('candidates.index')->with('success','Candidate created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate $candidate)
    {
        return view('candidates.show',compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        return view('candidates.edit',compact('candidate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidateRequest $request, Candidate $candidate)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $candidate->update($request->all());

        return redirect()->route('candidates.index')->with('success','Candidate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();

        return redirect()->route('candidates.index')
            ->with('success','Candidate deleted successfully');
    }
}
