<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;

Route::resource('cars', CarController::class);

Route::get('/', SiteController::class)->name('home');

Route::prefix('auth')->name('auth.')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/signup', 'signup')->name('signup');
});
