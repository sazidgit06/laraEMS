<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\EmployeeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[EmployeeController::class,'index']);