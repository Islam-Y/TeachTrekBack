<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrganization_socialRequest;
use App\Http\Requests\UpdateOrganization_socialRequest;
use App\Models\Organization_social;

class Admin_Organization_socialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
=======
        //
>>>>>>> 2a4f1f39ce1ad1c9b8c06149d8c35a88ef8f9756
        $organizations_social = Organization_social::all();

        return view('organizations_social.index', compact('organizations_social'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
=======
        //
>>>>>>> 2a4f1f39ce1ad1c9b8c06149d8c35a88ef8f9756
        return view('organizations_social.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrganization_socialRequest $request)
    {
<<<<<<< HEAD
=======
        //
>>>>>>> 2a4f1f39ce1ad1c9b8c06149d8c35a88ef8f9756
        $request->validate([
            'social_links' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'organization_id' => 'required',
        ]);

        Organization_social::create($request->all());

        return redirect()->route('organizations_social.index')->with('success','Organization_social created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization_social $organization_social)
    {
<<<<<<< HEAD
=======
        //
>>>>>>> 2a4f1f39ce1ad1c9b8c06149d8c35a88ef8f9756
        return view('organizations_social.show',compact('organization_social'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization_social $organization_social)
    {
<<<<<<< HEAD
=======
        //
>>>>>>> 2a4f1f39ce1ad1c9b8c06149d8c35a88ef8f9756
        return view('organizations_social.edit',compact('organization_social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganization_socialRequest $request, Organization_social $organization_social)
    {
<<<<<<< HEAD
=======
        //
>>>>>>> 2a4f1f39ce1ad1c9b8c06149d8c35a88ef8f9756
        $request->validate([
            'social_links' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'organization_id' => 'required',
        ]);

        $organization_social->update($request->all());

        return redirect()->route('organizations_social.index')->with('success','Organization_social updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization_social $organization_social)
    {
<<<<<<< HEAD
=======
        //
>>>>>>> 2a4f1f39ce1ad1c9b8c06149d8c35a88ef8f9756
        $organization_social->delete();

        return redirect()->route('organizations_social.index')
            ->with('success','Organization_social deleted successfully');
    }
}
