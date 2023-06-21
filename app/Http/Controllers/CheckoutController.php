<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\CheckoutMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function sendConfirmationEmail(Request $request)
    {
        // Your code to handle the checkout and construct the email

        // Example code to send the email
        $mail = new CheckoutMail();
        Mail::to(Auth::user()->email)->send($mail);

        // Return a response indicating the email was sent successfully
        // return response()->json(['message' => 'Email sent successfully']);
        // return redirect('/');
        return redirect('/')->with('paymentSuccess', true);
    }
}
