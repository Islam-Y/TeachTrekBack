<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;

Route::get('/', [IndexController::class, 'index']);


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('candidate/list', [CandidateController::class, 'index'])->name('candidate_list');
