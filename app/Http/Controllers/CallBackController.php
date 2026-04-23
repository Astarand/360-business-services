<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GreetingMail;

class CallBackController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z]+\s+[a-zA-Z]+$/',
            'email' => 'required|email',
            'phone' => 'required|string|regex:/^\d{10}$/',
        ]);
    
        try {
            // Send email
            Mail::to('contact@360bizservice.com')->send(new GreetingMail('$name'));
    
            // Email sent successfully
            return response()->json(['status' => true, 'message' => 'Form submitted successfully']);
        } catch (\Exception $e) {
            // Email sending failed
            return response()->json(['status' => false, 'message' => 'Failed to submit form. Please try again.']);
        }
    }
    
}
