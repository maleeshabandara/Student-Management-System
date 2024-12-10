<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Homecontroller;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/students',StudentController::class);
Route::resource('/teachers',TeacherController::class);
Route::resource('/courses',CourseController::class);
Route::resource('/semesters',SemesterController::class);
Route::resource('/payments',PaymentController::class);

Route::resource('/home',HomeController::class);
