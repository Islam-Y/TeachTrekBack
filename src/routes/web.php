<?php

<<<<<<< HEAD
<<<<<<< HEAD

=======
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
>>>>>>> 8260005bd062841d7847842df39380f8ac167db6
=======
use App\Http\Controllers\IndexController;
>>>>>>> 2a4f1f39ce1ad1c9b8c06149d8c35a88ef8f9756
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'index']);

<<<<<<< HEAD
<<<<<<< HEAD


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


=======
Route::resource('candidate_info', Candidate_infoController::class);
=======
>>>>>>> 2a4f1f39ce1ad1c9b8c06149d8c35a88ef8f9756

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
>>>>>>> 8260005bd062841d7847842df39380f8ac167db6
=======
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
>>>>>>> 2a4f1f39ce1ad1c9b8c06149d8c35a88ef8f9756
