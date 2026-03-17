<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('pages.home'); // menuju resources/views/home.blade.php
})->name('home');

Route::get('/about', function () {
    return view('pages.about'); // menuju resources/views/pages/about.blade.php
})->name('about');

Route::get('/services', function () {
    return view('pages.services'); // menuju resources/views/pages/services.blade.php
})->name('services');

Route::get('/insight', function () {
    return view('pages.insight'); // menuju resources/views/pages/insight.blade.php
})->name('insight');

Route::get('/portfolio', function () {
    return view('pages.portfolio'); // menuju resources/views/pages/portfolio.blade.php
})->name('portfolio');

Route::post('/contact-send', [ContactController::class, 'store'])->name('contact.store');

Route::get('/inicioxgaswaras', function () {
    return view('pages.inicioxgaswaras'); // menuju resources/views/pages/inicioxgaswaras.blade.php
})->name('inicioxgaswaras');
