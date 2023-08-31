<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;

// Auth::routes();

// Route::get('/', function () {
//     return view('components.layout');
// });

Route::get('/', [App\Http\Controllers\JobController::class, 'index'])->name('home');

Route::get('/singleJob/{id}', [App\Http\Controllers\JobController::class, 'getSingleJob'])->name('singleJob');

// Filters
Route::get('/filterByKeyword', [App\Http\Controllers\JobController::class, 'filterByKeyword'])->name('filter.keyword');
Route::get('/filterByArea', [App\Http\Controllers\JobController::class, 'filterByArea'])->name('filter.area');
Route::get('/filterBySeniority', [App\Http\Controllers\JobController::class, 'filterBySeniority'])->name('filter.seniority');
Route::get('/filterByPerks', [App\Http\Controllers\JobController::class, 'filterByPerks'])->name('filter.perks');
Route::get('/filterByLocation', [App\Http\Controllers\JobController::class, 'filterByLocation'])->name('filter.location');


