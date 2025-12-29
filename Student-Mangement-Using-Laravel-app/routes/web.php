<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;


Route::get('/', function () {
    return view('layout');
});

Route::resource('/students', StudentController::class);
Route::resource('/teachers', controller: TeacherController::class);
Route::resource('/courses', controller: CourseController::class);