<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Home
Route::get('/home', function () {
    return view('home.index');
})->name('home');

// Get In Touch
Route::get('/get-in-touch', function () {
    return view('get-in-touch.index');
})->name('get-in-touch');

// Sign In
Route::get('/signin', function () {
    return view('signin.index');
})->name('login');

// Register
Route::get('/register', function () {
    return view('register.index');
})->name('register');


// Offerings
Route::get('/offerings', function () {
    return view('offerings.index');
})->name('offerings');

