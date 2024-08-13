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

Route::get('/register/step1', [RegisterController::class, 'showStep1'])->name('register.step1');
Route::post('/register/step1', [RegisterController::class, 'postStep1']);

Route::get('/register/step2', [RegisterController::class, 'showStep2'])->name('register.step2');
Route::post('/register/step2', [RegisterController::class, 'postStep2']);

Route::get('/register/step3', [RegisterController::class, 'showStep3'])->name('register.step3');
Route::post('/register/step3', [RegisterController::class, 'postStep3']);

