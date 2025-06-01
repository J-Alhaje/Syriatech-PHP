<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/laravel/doc', function () {
    return view('doc');
})->name('doc');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('about');
})->name('about');