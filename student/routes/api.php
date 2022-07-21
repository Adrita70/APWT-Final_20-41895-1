<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/student/create',[StudentController::class,'create']);
Route::get('/student/delete/{id}',[StudentController::class,'delete']);
Route::get('/student/searchid/{id}',[StudentController::class,'search']);
Route::get('/student/searchdate/{date}',[StudentController::class,'searchdate']);
Route::get('/student/searchtype/{type}',[StudentController::class,'searchtype']);
Route::get('/student/searchdt/{type}/{date}',[StudentController::class,'searchdt']);
Route::get('/student/list',[StudentController::class,'list']);
Route::post('/student/update',[StudentController::class,'update']);