<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/home', function () {
    return view('home.index');
})->name('home');
// Home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Get In Touch
Route::get('/get-in-touch', function () {
    return view('get-in-touch'); 
})->name('get-in-touch');

// Sign In
Route::get('/signin', function () {
    return view('signin'); 
})->name('login');

// Register
Route::get('/register', function () {
    return view('register'); 
})->name('register');

// Offerings
Route::get('/offerings', function () {
    return view('offerings'); 
})->name('offerings');
