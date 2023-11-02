<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConfirmationEmail;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function form(){
        return view('form');
    }

    public function sendEmail(Request $request){//dependecy injection

        //far partire un email verso l'email ricevuta del form
        Mail::to($request->email)->send(new ConfirmationEmail());

        return redirect()->route('home')->with('success','Email inviata con successo!');
    }
}
