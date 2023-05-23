<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrganizationRequest;
use App\Http\Requests\UpdateOrganizationRequest;
use App\Models\Organization;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Organization::all();

        return view('organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrganizationRequest $request)
    {
        $request->validate([
            'name' => 'required', 'type' => 'required',
            'employer_id' => 'required', 'city_organization' => 'required',
            'vacancy_id' => 'required', 'photo_id' => 'required',
            'number_employees' => 'required', 'number_students' => 'required',
            'description' => 'required', 'description_mini' => 'required',
            'file_organization_id' => 'required',
        ]);

        Organization::create($request->all());

        return redirect()->route('organizations.index')->with('success','Organization created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        return view('organizations.show',compact('organization'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        return view('organizations.edit',compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganizationRequest $request, Organization $organization)
    {
        $request->validate([
            'name' => 'required', 'type' => 'required',
            'employer_id' => 'required', 'city_organization' => 'required',
            'vacancy_id' => 'required', 'photo_id' => 'required',
            'number_employees' => 'required', 'number_students' => 'required',
            'description' => 'required', 'description_mini' => 'required',
            'file_organization_id' => 'required',
        ]);

        $organization->update($request->all());

        return redirect()->route('organizations.index')->with('success','Organization updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();

        return redirect()->route('organizations.index')
            ->with('success','Organization deleted successfully');
    }
}
