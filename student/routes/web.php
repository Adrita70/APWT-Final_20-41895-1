<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::post ('/',[StudentController::class,'createSubmit'])->name('students.submit');
Route::get('/',[StudentController::class,'create'])->name('students.create');
Route::get('/student/create',[StudentController::class,'list'])->name('students.list');
//Route::post('/student/details/{id}/{name}/{dob}',[StudentController::class,'home'])->name('students.home');