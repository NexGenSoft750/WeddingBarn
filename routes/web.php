<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\DefaultImage;
use App\Models\Price;

Route::prefix('home')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    Route::get('/amenities', function () {
        return view('amenities');
    })->name('amenities');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    Route::get('/review', function () {
        return view('review');
    })->name('review');
    Route::get('/venuegallery', function () {
        return view('venuegallery');
    })->name('venuegallery');
    Route::get('/receptiongallery', function () {
        return view('receptiongallery');
    })->name('receptiongallery');
    Route::get('/ceremonygallery', function () {
        return view('ceremonygallery');
    })->name('ceremonygallery');
    Route::get('/portraitgallery', function () {
        return view('portraitgallery');
    })->name('portraitgallery');
    Route::get('/gallery', function () {
        return view('gallery');
    })->name('gallery');
    Route::get('/book', function () {
        return view('book');
    })->name('book');
    Route::get('/vendor', function () {
        return view('vendor');
    })->name('vendor');
    Route::get('/price', function () {
        $prices = Price::first();
        return view('price', compact('prices'));
    })->name('price');
    Route::get('/blog', function () {
        return view('blog');
    })->name('blog');
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/micro-wedding', function () {
        $images = DefaultImage::all();
        return view('microwedding', compact('images'));
    })->name('microwedding');
    Route::post('/submit-contact-form', [ContactController::class, 'submitForm'])->name('contactemail');
});
