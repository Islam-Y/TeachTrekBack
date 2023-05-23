<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVacancyRequest;
use App\Http\Requests\UpdateVacancyRequest;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancy::all();

        return view('vacancies.index', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vacancies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVacancyRequest $request)
    {
        $request->validate([
            'name' => 'required', 'salary' => 'required',
            'city_vacancy' => 'required', 'underground' => 'required',
            'description' => 'required', 'employer_id' => 'required',
            'duties' => 'required', 'requirements' => 'required',
            'advantages_vacancy' => 'required',
        ]);

        Vacancy::create($request->all());

        return redirect()->route('vacancies.index')->with('success','Vacancy created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy)
    {
        return view('vacancies.show',compact('vacancy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        return view('vacancies.edit',compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVacancyRequest $request, Vacancy $vacancy)
    {
        $request->validate([
            'name' => 'required', 'salary' => 'required',
            'city_vacancy' => 'required', 'underground' => 'required',
            'description' => 'required', 'employer_id' => 'required',
            'duties' => 'required', 'requirements' => 'required',
            'advantages_vacancy' => 'required',
        ]);

        $vacancy->update($request->all());

        return redirect()->route('vacancies.index')->with('success','Vacancy updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();

        return redirect()->route('vacancies.index')
            ->with('success','Vacancy deleted successfully');
    }
}
