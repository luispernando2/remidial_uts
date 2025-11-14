<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Home
Route::get('/', [BlogController::class, 'home'])->name('home');

// About
Route::get('/about', [BlogController::class, 'about'])->name('about');

// Welcome Page
Route::get('/welcome', function () {
    return view('welcome', [
        'title' => 'Welcome Page',
        'message' => 'Ini adalah halaman Welcome Laravel yang sudah disesuaikan!'
    ]);
});
