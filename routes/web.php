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
    return view('pages/contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('pages/about');
})->name('about');

Route::get('/logging', function () {
    return view('logging');
})->name('logging');

Route::get('/installation', function () {
    return view('installation');
})->name('installation');

Route::get('/routes', function () {
    return view('routes');
})->name('routes');

Route::get('/controllers', function () {
    return view('controllers');
})->name('controllers');

Route::get('/views', function () {
    return view('views');
})->name('views');

Route::get('/database', function () {
    return view('database');
})->name('database');

Route::get('/configuration', function () {
    return view('configuration');
})->name('configuration');

Route::get('/directory-structure', function () {
    return view('directory_structure');
})->name('directory_structure');

Route::get('/middleware', function () {
    return view('middleware');
})->name('middleware');

Route::get('/csrf', function () {
    return view('csrf');
})->name('csrf');

Route::get('/requests', function () {
    return view('requests');
})->name('requests');

Route::get('/responses', function () {
    return view('responses');
})->name('responses');

Route::get('/blade', function () {
    return view('blade');
})->name('blade');

Route::get('/asset-bundling', function () {
    return view('asset_bundling');
})->name('asset_bundling');

Route::get('/url-generation', function () {
    return view('url_generation');
})->name('url_generation');

Route::get('/session', function () {
    return view('session');
})->name('session');

Route::get('/validation', function () {
    return view('validation');
})->name('validation');

Route::get('/error-handling', function () {
    return view('error_handling');
})->name('error_handling');

Route::get('/more', function () {
    return view('more');
})->name('more');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');