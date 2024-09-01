<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::as('frontend.')->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/login', [FrontendController::class, 'login'])->name('login');
    Route::get('/register', [FrontendController::class, 'register'])->name('register');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/team', [FrontendController::class, 'team'])->name('team');
    Route::get('/payment', [FrontendController::class, 'payment'])->name('payment');
});

