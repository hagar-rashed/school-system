<?php

use Illuminate\Support\Facades\Route;
use Modules\AcademicYear\Http\Controllers\AcademicYearController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.dashboard');
});

// Route::resource('acdmic-year', 'AcadmicYearController');

Route::get('get',[AcademicYearController::class,'index']);

