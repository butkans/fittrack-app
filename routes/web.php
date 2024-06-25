<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\UserController;

use App\Http\Controllers\ProfileController;

Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/users', [UserController::class, 'index'])->name('user.index');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
