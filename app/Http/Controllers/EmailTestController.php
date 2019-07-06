<?php

namespace App\Http\Controllers;
use Mail;

class EmailTestController extends Controller
{
    public function sendMail()
    {
        $to_name = 'mail2alokdas@gmail.com';
        $to_email = 'mail2alokdas@gmail.com';
        $data = array('name' => "Sam Jose", "body" => "Test mail");

        Mail::send('emails.mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Artisans Web Testing Mail');
            $message->from('FROM_EMAIL_ADDRESS', 'Artisans Web');
        });
    }
}
