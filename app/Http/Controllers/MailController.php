<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){

        $details=[
            'title'=>'Mail form Scoding',
            'body'=>'This is for testing mail using gmail'
        ];

        Mail::to("testscoding32@gmail.com")->send(new TestMail($details));
        return "email sent";
    }
}
