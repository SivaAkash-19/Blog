<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactForm(){
        return view ('contact.form');
    }

    public function submitContactForm(Request $request){
        //dd($request -> all());
        //$data =$request ->all();

        $validated = $request-> validate([
            'name'=>'required | max:15',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // we can store this data to our database
        //success message
        return redirect() -> route('contact.show') -> with('status', 'Your message has been sent successfully..') ;
    }
}
