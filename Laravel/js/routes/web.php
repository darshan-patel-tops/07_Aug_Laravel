<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;



Route::get('/',[EmployeeController::class,'index']);
Route::get('/home',[EmployeeController::class,'index']);
