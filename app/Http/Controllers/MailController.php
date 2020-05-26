<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(){
        $details = [
            'title' => 'This is title',
            'body' => 'This is body'
        ];
       
        \Mail::to('vithiluu1415@gmail.com')->send(new \App\Mail\MyTestMail($details));
       
        dd("Email is Sent.");
    }
}
