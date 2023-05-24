<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');

Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
