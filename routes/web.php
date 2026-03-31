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

Route::get('/gaswaras', function () {
    return view('pages.inicioxgaswaras'); // menuju resources/views/pages/inicioxgaswaras.blade.php
})->name('inicioxgaswaras');

Route::get('/ah-pek-kopitiam', function () {
    return view('pages.ahpekkopitiam'); // menuju resources/views/pages/ahpekkopitiam.blade.php
})->name('ah-pek-kopitiam');

Route::get('/hutaraja-coffee-shop', function () {
    return view('pages.hutaraja'); // menuju resources/views/pages/hutarajacoffeeshop.blade.php
})->name('hutaraja-coffee-shop');

Route::get('/isyana-sarasvati', function () {
    return view('pages.isyana'); // menuju resources/views/pages/isyana-sarasvati.blade.php
})->name('isyana-sarasvati');

Route::get('/lus-adventures-de-l-art-deco', function () {
    return view('pages.adventure'); // menuju resources/views/pages/lus-adventures-de-l-art-deco.blade.php
})->name('lus-adventures-de-l-art-deco');

Route::get('/cookie-up-your-day', function () {
    return view('pages.cookie'); // menuju resources/views/pages/cookie-up-your-day.blade.php
})->name('cookie-up-your-day');

Route::get('/agensi-kreatif-profesional-untuk-membangun-brand-yang-kuat-dan-relevan', function () {
    return view('pages.newsdesainweb'); // menuju resources/views/pages/newsdesainwebsite.blade.php
})->name('agensi-kreatif-profesional-untuk-membangun-brand-yang-kuat-dan-relevan');
