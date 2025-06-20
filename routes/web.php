<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');