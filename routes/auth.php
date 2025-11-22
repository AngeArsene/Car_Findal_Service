<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'login')->name('login');
Route::post('/logout', 'logout')->name('logout');
Route::post('/verify-user', 'verifyUser')->name('verify-user');

Route::get('/signup', 'signup')->name('signup');
Route::post('/register', 'register')->name('register');
Route::get('/reset-password', 'resetPassword')->name('reset-password');
Route::get('/verify-email', 'verifyEmail')->name('verify-email');
