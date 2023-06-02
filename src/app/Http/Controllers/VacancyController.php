<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVacancyRequest;
use App\Http\Requests\UpdateVacancyRequest;
use App\Models\vacancy;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = vacancy::all();
        return view('main.vacancy_list', ['vacancies' => $vacancies, 'title' => 'Vacancy']); 
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
    public function store(StoreVacancyRequest $request)
    {
        $request->validate([
            'name' => 'required', 'salary' => 'required',
            'city_vacancy' => 'required', 'underground' => 'required',
            'description' => 'required', 'employer_id' => 'required',
            'duties' => 'required', 'requirements' => 'required',
            'advantages_vacancy' => 'required',
        ]);
        $vacancy = Vacancy::create($request->all());
        // TODO: Add redirect to created vacancy's page
        return redirect('');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVacancyRequest $request, Vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        //
    }
}
