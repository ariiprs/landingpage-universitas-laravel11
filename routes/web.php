<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.dashboard');
})->name('front.dashboard');

Route::get('/categories', function () {
    return view('front.categories');
})->name('front.categories');

Route::get('/details', function () {
    return view('front.details');
})->name('front.details');

Route::get('/search', function () {
    return view('front.search');
})->name('front.search');
