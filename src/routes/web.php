<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\VacancyController;

Route::get('/', [IndexController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');

Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');

Route::get('/candidate/list', [CandidateController::class, 'index'])->name('candidate_list');
Route::get('/candidate/{id}', [CandidateController::class, 'show'])->name('candidate_profile');

Route::get('/employer/list', [EmployerController::class, 'index'])->name('employer_list');
Route::get('/employer/{id}', [EmployerController::class, 'show'])->name('employer_profile');

Route::get('/vacancy/list', [VacancyController::class, 'index'])->name('vacancy_list');
Route::get('/vacancy/{id}', [VacancyController::class, 'show'])->name('employevacancy_profile');

Route::get('/organization/list', [OrganizationController::class, 'index'])->name('organization_list');
Route::get('/organization/{id}', [OrganizationController::class, 'show'])->name('organization_profile');
