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

use App\Http\Controllers\RegisterController;

Route::get('/signup', [RegisterController::class, 'showStep1'])->name('signup');
Route::post('/signup', [RegisterController::class, 'postStep1'])->name('signup.post');

Route::get('/signup/step2', [RegisterController::class, 'showStep2'])->name('signup.step2');
Route::post('/signup/step2', [RegisterController::class, 'postStep2'])->name('signup.step2.post');

Route::get('/signup/step3', [RegisterController::class, 'showStep3'])->name('signup.step3');
Route::post('/signup/step3', [RegisterController::class, 'postStep3'])->name('signup.step3.post');
