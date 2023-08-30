<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;

// Auth::routes();

// Route::get('/', function () {
//     return view('components.layout');
// });

Route::get('/', [App\Http\Controllers\JobController::class, 'index'])->name('home');

Route::get('/singleJob', [App\Http\Controllers\JobController::class, 'create'])->name('singleJob');
