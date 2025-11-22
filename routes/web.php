<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;

Route::resource('cars', CarController::class);

Route::get('/', SiteController::class)->name('home');

Route::get('/search-cars', [CarController::class, 'search'])->name('cars.search');
Route::get('/car-images/{car}', [CarController::class, 'images'])->name('cars.images');
Route::get('/favorite-cars', [CarController::class, 'favorite'])->name('cars.favorite');
