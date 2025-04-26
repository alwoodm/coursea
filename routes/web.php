<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\SetLocale;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect root to default language
Route::get('/', function () {
    return redirect('/' . app()->getLocale() . '/welcome');
});

// Language prefix group
Route::prefix('{locale?}')->middleware(SetLocale::class)->group(function () {
    Route::get('/welcome', [LandingController::class, 'index'])->name('landing');
    
    // Platform routes (protected)
    Route::middleware(['auth'])->group(function () {
        Route::get('/platform', function() {
            return view('platform.dashboard');
        })->name('platform.dashboard');
    });
    
    // Contact forms submission
    Route::post('/contact/instructor', [ContactController::class, 'instructorContact'])->name('contact.instructor');
    Route::post('/contact/student', [ContactController::class, 'studentContact'])->name('contact.student');
    
    // Define a fallback route that was previously missing
    Route::get('/about', function() {
        return view('about');
    })->name('about');
    
    Route::get('/contact', function() {
        return view('contact');
    })->name('about');
});

// Use Laravel's built-in authentication routes, but remove registration routes
require __DIR__.'/auth.php';
