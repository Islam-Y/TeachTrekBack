<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployer_infoRequest;
use App\Http\Requests\UpdateEmployer_infoRequest;
use App\Models\Employer_info;

class Admin_Employer_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employers_info = Employer_info::all();

        return view('employers_info.index', compact('employers_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employers_info.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployer_infoRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'patronymic' => 'required',
            'employer_id' => 'required',
        ]);

        Employer_info::create($request->all());

        return redirect()->route('employers_info.index')->with('success','Employer_info created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employer_info $employer_info)
    {
        return view('employers_info.show',compact('employer_info'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer_info $employer_info)
    {
        return view('employers_info.edit',compact('employer_info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployer_infoRequest $request, Employer_info $employer_info)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'patronymic' => 'required',
            'employer_id' => 'required',
        ]);

        $employer_info->update($request->all());

        return redirect()->route('employers_info.index')->with('success','Employer_info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer_info $employer_info)
    {
        $employer_info->delete();

        return redirect()->route('employers_info.index')
            ->with('success','Employer_info deleted successfully');
    }
}
