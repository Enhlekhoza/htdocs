<?php

use Illuminate\Support\Facades\Route;

// Route for the Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Route for the Contact Us page
Route::get('/contact-us', function () {
    return view('contactus');
})->name('contactus');

// Route for the Login page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route for the Signup page
Route::get('/signup', function () {
    return view('signup');
})->name('signup');
