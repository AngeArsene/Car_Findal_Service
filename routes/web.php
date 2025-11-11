<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SiteController;

Route::get('/', SiteController::class)->name('home');

Route::resource('cars', CarController::class);
