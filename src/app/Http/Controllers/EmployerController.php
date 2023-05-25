<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployerRequest;
use App\Http\Requests\UpdateEmployerRequest;
use App\Models\employer;
use Illuminate\Support\Facades\Hash;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employers = employer::all();
        return view('main.employers_list', ['employers' => $employers, 'title' => 'Employers']); 
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
    public function store(StoreEmployerRequest $request)
    {
        $employer = new Employer;
        $employer->email = $request->email;

        $hashed_password = Hash::make($request->password);
        $employer->password = $hashed_password;
        $employer->save();

        // TODO: Add redirection page to employer's page
        return redirect('');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $requested_employer = Employer::where('id', $id)->first();
        return view('main.employer_profile',  [
            'title' => $requested_employer,
            'employer' => $requested_employer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $employer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployerRequest $request, Employer $employer)
    {
        $email = $employer->email;
        $cur_employer = Employer::all()->find($email);
        $hashed_password = Hash::make($request->password);

        // TODO: Look at password warning
        $cur_employer->password = $hashed_password;
        $cur_employer->save();
        // TODO: Add redirect to employer's page
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
        $employer->delete();
    }
}
