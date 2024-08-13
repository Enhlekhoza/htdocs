<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignupController;

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

// Routes for Signup process
Route::get('/signup', [SignupController::class, 'showStep1'])->name('signup');
Route::post('/signup', [SignupController::class, 'postStep1'])->name('signup.post');

Route::get('/signup/step2', [SignupController::class, 'showStep2'])->name('signup.step2');
Route::post('/signup/step2', [SignupController::class, 'postStep2'])->name('signup.step2.post');

Route::get('/signup/step3', [SignupController::class, 'showStep3'])->name('signup.step3');
Route::post('/signup/step3', [SignupController::class, 'postStep3'])->name('signup.step3.post');
