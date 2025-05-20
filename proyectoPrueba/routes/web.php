<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/messages', function () {
    return view('messages');
});

Route::get('/stats', function () {
    return view('stats');
});

Route::get('/calendar', function () {
    return view('calendar');
});
