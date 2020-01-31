<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

   public function show(){
    return view('contact');
   }

   public function store(){

        request()->validate(['email' => 'required|email']);

        // Mail::raw('plain text message', function ($message) {
        //     $message->from('john@johndoe.com', 'John Doe');
        //     $message->to(request('email'));
        //     $message->subject('Hello there');
        // });

        Mail::to(request('email'))
            ->send(new Contact('shirts'));

        return redirect('/contact')
            ->with('message', 'Email Sent');
   }
}
