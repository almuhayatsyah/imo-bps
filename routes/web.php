<?php

use Illuminate\Support\Facades\Route;

// Landing page (halaman depan sebelum masuk dashboard)
Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
