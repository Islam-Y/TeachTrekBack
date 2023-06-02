<?php

use App\Http\Controllers\Admin_Candidate_educationController;
use App\Http\Controllers\Admin_Candidate_experienceController;
use App\Http\Controllers\Admin_Candidate_full_nameController;
use App\Http\Controllers\Admin_Candidate_infoController;
use App\Http\Controllers\Admin_Candidate_socialController;
use App\Http\Controllers\Admin_Employer_infoController;
use App\Http\Controllers\Admin_EmployerController;
use App\Http\Controllers\Admin_FileController;
use App\Http\Controllers\Admin_Organization_socialController;
use App\Http\Controllers\Admin_OrganizationController;
use App\Http\Controllers\Admin_PhotoController;
use App\Http\Controllers\Admin_UserController;
use App\Http\Controllers\Admin_VacancyController;
use App\Http\Controllers\Admin_AuthController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
//    return redirect('/admin/users');
//});


//    Route::middleware("guest:admin")->group(function () {
//        Route::get('login', [Admin_AuthController::class, 'index'])->name('login');
//        Route::post('login_process', [Admin_AuthController::class, 'login'])->name('login_process');
//    });

    Route::get('login', [Admin_AuthController::class, 'index'])->name('login');
    Route::post('login_process', [Admin_AuthController::class, 'login'])->name('login_process');

    Route::middleware("auth:admin")->group(function () {
        Route::get('logout', [Admin_AuthController::class, 'logout'])->name('logout');

        Route::resource('admin_users', AdminUserController::class);

        Route::resource('users', Admin_UserController::class);

        Route::resource('candidates_education', Admin_Candidate_educationController::class);

        Route::resource('candidates_experience', Admin_Candidate_experienceController::class);

        Route::resource('candidates_full_name', Admin_Candidate_full_nameController::class);

        Route::resource('candidates_info', Admin_Candidate_infoController::class);

        Route::resource('candidates_social', Admin_Candidate_socialController::class);

        Route::resource('employers_info', Admin_Employer_infoController::class);

        Route::resource('employers', Admin_EmployerController::class);

        Route::resource('files', Admin_FileController::class);

        Route::resource('photos', Admin_PhotoController::class);

        Route::resource('organizations_social', Admin_Organization_socialController::class);

        Route::resource('organizations', Admin_OrganizationController::class);

        Route::resource('vacancies', Admin_VacancyController::class);

    });


