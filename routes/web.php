<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\employeeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[employeeController::class,'index']);