<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function index(){
        return View('mail');
    }

    public function index1(){
        return View('registering');
    }
public function sendMail()
{
    $data = ['message' => 'This is a test email sent using Mailtrap!'];

    Mail::send('mail', $data, function($message) {
        $message->to('mushyp420@gmail.com')->subject('change Email Test');
    });

    return '$data';
}
public function store(Request $Request){
    $data=new Message();
    $data->email = request('email');
    $data->subject = request('subject');
    $data->message = request('message');
    $data->save();
    return redirect()->back();
}

}
