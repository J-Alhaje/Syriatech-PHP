<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::raw(
            "Name: {$validated['name']}\nEmail: {$validated['email']}\nSubject: {$validated['subject']}\nMessage: {$validated['message']}",
            function ($message) use ($validated) {
                $message->to('jamelalhaji@gmail.com')
                        ->subject('Contact Form: ' . $validated['subject']);
            }
        );

        return back()->with('success', 'Your message has been sent!');
    }
} 