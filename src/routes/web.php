<?php


use Illuminate\Support\Facades\Route;



Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


