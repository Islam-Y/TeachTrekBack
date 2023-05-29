<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\AuthController;

require __DIR__.'/admin.php';

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware("auth:web")->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware("guest:web")->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');

    Route::get('/forgot', [AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/forgot_process', [AuthController::class, 'forgot'])->name('forgot_process');
});

Route::get('/user/list', [UserController::class, 'index'])->name('user_list');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user_profile');

Route::get('/employer/list', [EmployerController::class, 'index'])->name('employer_list');
Route::get('/employer/{id}', [EmployerController::class, 'show'])->name('employer_profile');

Route::get('/vacancy/list', [VacancyController::class, 'index'])->name('vacancy_list');
Route::get('/vacancy/{id}', [VacancyController::class, 'show'])->name('vacancy');

Route::get('/organization/list', [OrganizationController::class, 'index'])->name('organization_list');
Route::get('/organization/{id}', [OrganizationController::class, 'show'])->name('organization_profile');
