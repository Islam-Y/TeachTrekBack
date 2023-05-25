<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EmployerController;


Route::get('/', [IndexController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');

Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');

Route::get('/candidate/list', [CandidateController::class, 'index'])->name('candidate_list');
Route::get('/candidate/{id}', [CandidateController::class, 'show'])->name('candidate_profile');

Route::get('/employer/list', [EmployerController::class, 'index'])->name('employer_list');
Route::get('/employer/{id}', [EmployerController::class, 'show'])->name('employer_profile');
