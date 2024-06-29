<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'first'     =>      $request->first,
            'last'      =>      $request->last,
            'email'     =>      $request->email,
            'subject'   =>      $request->subject,
            'message'   =>      $request->message
        ];

        Mail::to('pkaso705@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Your Message has been sent successfully!');
    }
}
