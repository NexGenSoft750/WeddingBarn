<?php

use Illuminate\Support\Facades\Route;
use App\Models\Price;
use App\Models\TourAvailability;
use App\Models\TourBooking;
use App\Models\DefaultImage;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TourBookingController;
use Carbon\Carbon;

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

    Route::get('/inpersontour', function () {
        $tourAvailability = TourAvailability::first();
        $bookedDates = TourBooking::pluck('tour_date')->map(function ($date) {
            return Carbon::parse($date)->format('Y-m-d');
        });
        return view('inpersontour', compact('tourAvailability', 'bookedDates'));
    })->name('inpersontour');

    Route::get('/virtualtour', function () {
        $tourAvailability = TourAvailability::first();
        $bookedDates = TourBooking::pluck('tour_date')->map(function ($date) {
            return Carbon::parse($date)->format('Y-m-d');
        });
        return view('virtualtour', compact('tourAvailability', 'bookedDates'));
    })->name('virtualtour');

    Route::get('/micro-wedding', function () {
        $images = DefaultImage::all();
        return view('microwedding', compact('images'));
    })->name('microwedding');

    Route::post('/submit-contact-form', [ContactController::class, 'submitForm'])->name('contactemail');

    Route::post('/tour-booking', [TourBookingController::class, 'store'])->name('touremail');
});
