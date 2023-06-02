<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployerRequest;
use App\Http\Requests\UpdateEmployerRequest;
use App\Models\Employer;

class Admin_EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employers = Employer::all();

        return view('employers.index', compact('employers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployerRequest $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        Employer::create($request->all());

        return redirect()->route('employers.index')->with('success','Employer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employer $employer)
    {
        return view('employers.show',compact('employer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $employer)
    {
        return view('employers.edit',compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployerRequest $request, Employer $employer)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $employer->update($request->all());

        return redirect()->route('employers.index')->with('success','Employer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
        $employer->delete();

        return redirect()->route('employers.index')
            ->with('success','Employer deleted successfully');
    }
}
