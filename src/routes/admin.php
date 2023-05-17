<?php

use App\Http\Controllers\Candidate_educationController;
use App\Http\Controllers\Candidate_experienceController;
use App\Http\Controllers\Candidate_full_nameController;
use App\Http\Controllers\Candidate_infoController;
use App\Http\Controllers\Candidate_socialController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\Employer_infoController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\Organization_socialController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::resource('candidate_education', Candidate_educationController::class);

Route::resource('candidate_experience', Candidate_experienceController::class);

Route::resource('candidate_full_name', Candidate_full_nameController::class);

Route::resource('candidate_info', Candidate_infoController::class);

Route::resource('candidate_social', Candidate_socialController::class);

Route::resource('candidate', CandidateController::class);

Route::resource('employer_info', Employer_infoController::class);

Route::resource('employer', EmployerController::class);

Route::resource('files', FilesController::class);

Route::resource('organization_social', Organization_socialController::class);

Route::resource('organization', OrganizationController::class);

Route::resource('vacancy', VacancyController::class);

Route::get('/', function () {
    return view('welcome');
});
