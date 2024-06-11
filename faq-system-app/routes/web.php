<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FaqController;

// Define routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Prefix all admin routes with 'admin'
    Route::prefix('admin')->group(function () {
        // Define the admin dashboard route
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        // Resource routes for Category and FAQ management
        Route::resource('categories', CategoryController::class);
        Route::resource('faqs', FaqController::class);
    });
});

// Include authentication routes
require __DIR__.'/auth.php';
