<?php

use App\Http\Controllers\Admin_Candidate_educationController;
use App\Http\Controllers\Admin_Candidate_experienceController;
use App\Http\Controllers\Admin_Candidate_full_nameController;
use App\Http\Controllers\Admin_Candidate_infoController;
use App\Http\Controllers\Admin_Candidate_socialController;
use App\Http\Controllers\Admin_CandidateController;
use App\Http\Controllers\Admin_Employer_infoController;
use App\Http\Controllers\Admin_EmployerController;
use App\Http\Controllers\Admin_FilesController;
use App\Http\Controllers\Admin_Organization_socialController;
use App\Http\Controllers\Admin_OrganizationController;
use App\Http\Controllers\Admin_VacancyController;
use Illuminate\Support\Facades\Route;

Route::resource('candidate_education', Admin_Candidate_educationController::class);

Route::resource('candidate_experience', Admin_Candidate_experienceController::class);

Route::resource('candidate_full_name', Admin_Candidate_full_nameController::class);

Route::resource('candidate_info', Admin_Candidate_infoController::class);

Route::resource('candidate_social', Admin_Candidate_socialController::class);

Route::resource('candidate', Admin_CandidateController::class);

Route::resource('employer_info', Admin_Employer_infoController::class);

Route::resource('employer', Admin_EmployerController::class);

Route::resource('files', Admin_FilesController::class);

Route::resource('organization_social', Admin_Organization_socialController::class);

Route::resource('organization', Admin_OrganizationController::class);

Route::resource('vacancy', Admin_VacancyController::class);

Route::get('/', function () {
    return view('welcome');
});
