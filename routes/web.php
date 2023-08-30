<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Auth::routes();

Route::get('/', function () {
    return view('components.layout');
});

Route::get('/jobs', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
