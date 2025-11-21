<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;

Route::resource('cars', CarController::class);

Route::get('/', SiteController::class)->name('home');

Route::get('/search-cars', [CarController::class, 'search'])->name('cars.search');
Route::get('/favorite-cars', [CarController::class, 'favorite'])->name('cars.favorite');

Route::prefix('auth')->name('auth.')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/signup', 'signup')->name('signup');
});
