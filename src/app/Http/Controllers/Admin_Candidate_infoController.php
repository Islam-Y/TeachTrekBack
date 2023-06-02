<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidate_infoRequest;
use App\Http\Requests\UpdateCandidate_infoRequest;
use App\Models\Candidate_info;

class Admin_Candidate_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates_info = Candidate_info::all();

        return view('admin.candidates_info.index', compact('candidates_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.candidates_info.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCandidate_infoRequest $request)
    {
        $request->validate([
            'floor' => 'required',
            'profession' => 'required',
            'specialization' => 'required',
            'city_candidate' => 'required',
            'description' => 'required',
            'files_candidate_id' => 'required',
            'photo_id' => 'required',
            'candidate_full_name_id' => 'required',
        ]);

        Candidate_info::create($request->all());

        return redirect()->route('admin.candidates_info.index')->with('success','Candidate_info created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate_info $candidate_info)
    {
        return view('admin.candidates_info.show',compact('candidate_info'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate_info $candidate_info)
    {
        return view('admin.candidates_info.edit',compact('candidate_info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidate_infoRequest $request, Candidate_info $candidate_info)
    {
        $request->validate([
            'floor' => 'required',
            'profession' => 'required',
            'specialization' => 'required',
            'city_candidate' => 'required',
            'description' => 'required',
            'files_candidate_id' => 'required',
            'photo_id' => 'required',
            'candidate_full_name_id' => 'required',
        ]);

        $candidate_info->update($request->all());

        return redirect()->route('admin.candidates_info.index')->with('success','Candidate_info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate_info $candidate_info)
    {
        $candidate_info->delete();

        return redirect()->route('admin.candidates_info.index')
            ->with('success','Candidate_info deleted successfully');
    }
}
