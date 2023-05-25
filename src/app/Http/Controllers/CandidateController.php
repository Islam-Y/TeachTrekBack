<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use App\Models\candidate;
use Illuminate\Support\Facades\Hash;
use App\Models\candidate_full_name;
use App\Models\candidate_info;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates = Candidate::all();
        return view('main.candidates_list', ['candidates' => $candidates, 'title' => 'Candidates']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCandidateRequest $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        $candidate = new Candidate;
        $candidate->email = $request->email;

        $hashed_password = Hash::make($request->password);
        $candidate->password = $hashed_password;
        $candidate->save();

        // TODO: Add redirection page
        return redirect('');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $candidate = Candidate::where('id', $id)->first();

        return view('main.candidate_profile', [
            'title' => $candidate,
            'candidate' => $candidate
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidateRequest $request, Candidate $candidate)
    {
        $request->validate([
            "password" => "required"
        ]);
        $email = $candidate->email;
        $cur_candidate = Candidate::all()->find($email);
        $hashed_password = Hash::make($request->password);

        // TODO: Look at password warning
        $cur_candidate->password = $hashed_password;
        $cur_candidate->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();
    }
}
