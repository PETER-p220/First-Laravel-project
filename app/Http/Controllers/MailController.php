<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //

public function sendTestEmail()
{
    $data = ['message' => 'This is a test email sent using Mailtrap!'];

    Mail::send('mailTesting', $data, function($message) {
        $message->to('test@example.com')->subject('Test Email');
    });

    return 'Test email sent!';
}

}
