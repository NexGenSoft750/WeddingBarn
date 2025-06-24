<?php

use Illuminate\Support\Facades\Route;
use App\Models\Price;
use App\Models\TourAvailability;
use App\Models\TourBooking;
use App\Models\DefaultImage;
use App\Http\Controllers\ContactController;
use App\Models\TimeSlot;
use App\Http\Controllers\TourBookingController;
use App\Models\PriceImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;

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
    $priceimages = PriceImage::all();
    return view('price', compact('prices', 'priceimages'));
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
    $bookedTimes = TourBooking::all()->groupBy('tour_date')->map(function ($bookings) {
        return $bookings->pluck('tour_time')->map(function ($time) {
            return Carbon::parse($time)->format('h:i A');  // Convert to 12-hour format (AM/PM)
        });
    });
    $timeSlots = TimeSlot::all();
    return view('inpersontour', compact('tourAvailability', 'bookedDates', 'timeSlots', 'bookedTimes'));
})->name('inpersontour');

Route::get('/virtualtour', function () {
    $tourAvailability = TourAvailability::first();
    $bookedDates = TourBooking::pluck('tour_date')->map(function ($date) {
        return Carbon::parse($date)->format('Y-m-d');
    });
    $bookedTimes = TourBooking::all()->groupBy('tour_date')->map(function ($bookings) {
        return $bookings->pluck('tour_time')->map(function ($time) {
            return Carbon::parse($time)->format('h:i A');  // Convert to 12-hour format (AM/PM)
        });
    });
    $timeSlots = TimeSlot::all();

    return view('virtualtour', compact('tourAvailability', 'bookedDates', 'timeSlots', 'bookedTimes'));
})->name('virtualtour');

Route::get('/micro-wedding', function () {
    $images = DefaultImage::all();
    $prices = Price::all();
    return view('microwedding', compact('images', 'prices'));
})->name('microwedding');
Route::get('/faq', function () {
    return view('faq');
})->name('FAQ');
Route::post('/submit-contact-form', [ContactController::class, 'submitForm'])->name('contactemail');

Route::post('/tour-booking', [TourBookingController::class, 'store'])->name('touremail');

// Temporary route for production deployment - remove after use
Route::get('/symlink', function () {
    // Only allow in production and if storage link doesn't exist
    if (app()->environment('production') && !file_exists(public_path('storage'))) {
        Artisan::call('storage:link');
        return 'Storage link created successfully! Please remove this route now.';
    }
    return 'Storage link already exists or not in production environment.';
});

