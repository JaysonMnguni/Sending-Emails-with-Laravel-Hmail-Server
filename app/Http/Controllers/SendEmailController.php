<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Messaging;

class SendEmailController extends Controller
{
    //
    public function sendEmail(Request $request){

        // Validate Form Data:
        $this->validate($request, [
            "your_first_name" => "required",
            "your_last_name" => "required",
            "your_email" => "required|email",
            "receiver_email" => "required|email",
            "subject" => "required",
            "email_message"=> "required"
        ]);

        // Send Email To Receiver:
        Mail::to($request->receiver_email)->send(new Messaging(
            $request->your_first_name,
            $request->your_last_name,
            $request->your_email,
            $request->subject,
            $request->email_message
        ));

        return redirect()->back()->with("success", "Email Sent Successfully");
    }
}
