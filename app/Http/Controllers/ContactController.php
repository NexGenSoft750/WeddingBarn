<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the incoming form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'fiance_first_name' => 'required|string|max:255',
            'fiance_last_name' => 'required|string|max:255',
            'wedding_date' => 'required|date',
            'message' => 'nullable|string',
        ]);
        $formData = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'fiance_first_name' => $request->fiance_first_name,
            'fiance_last_name' => $request->fiance_last_name,
            'wedding_date' => $request->wedding_date,
            'message' => $request->message,

        ];
        // Send email with the form data
        Mail::to('jexperiment242@gmail.com')->send(new ContactFormMail($formData));

        return back()->with('success', 'Your message has been sent!');
    }
}
