<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(){
        return view('contact.contact');
    }

    public function store(Request $request){

        $data=$request->validate([
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_subject' => 'required',
            'contact_message' => 'required'
        ]);

        // Send e-mail
        Mail::to('test@test.com')->send(new ContactFormMail($data));
        return redirect('contact');
    }
}
