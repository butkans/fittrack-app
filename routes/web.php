<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

// Define your routes

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Auth routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
});