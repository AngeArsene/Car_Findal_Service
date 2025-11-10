<?php

use App\Math;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;
use App\Http\Controllers\SiteController;

Route::get('/', SiteController::class)->name('home');
