<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourBooking;
use App\Mail\TourBookingConfirmation;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon; // Import Carbon

class TourBookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate form data manually (since we're using Backpack)
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'fiance_first_name' => 'required|string|max:255',
            'fiance_last_name' => 'required|string|max:255',
            'wedding_date' => 'required|date', // Validate the wedding date
            'message' => 'nullable|string',
            'tour_date' => 'required|date', // Validate the tour date
            'tour_time' => 'required|string', // Validate the tour time (it's a string, e.g., "09:00")
        ]);

        // Convert dates to Y-m-d format using Carbon
        try {
            $weddingDate = Carbon::parse($validatedData['wedding_date'])->format('Y-m-d');
            $tourDate = Carbon::parse($validatedData['tour_date'])->format('Y-m-d');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['date_error' => 'There was an issue with the date format.']);
        }

        // Create the booking record in the database
        $booking = TourBooking::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'fiance_first_name' => $validatedData['fiance_first_name'],
            'fiance_last_name' => $validatedData['fiance_last_name'],
            'wedding_date' => $weddingDate, // Store the formatted wedding date
            'message' => $validatedData['message'],
            'tour_date' => $tourDate, // Store the formatted tour date
            'tour_time' => $validatedData['tour_time'],
        ]);

        // Send the confirmation email
        Mail::to('jexperiment242@gmail.com')->send(new TourBookingConfirmation($booking));

        // Redirect back with success message
        return redirect()->back()
            ->with('success', 'Tour booking created successfully.');
    }
}
