<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
class ContactFormController extends Controller
{
    public function create(){
        $header=DB::table('header_images')->value('contact');
        return view('contact.contact',['header'=> $header]);
    }

    public function store(Request $request){

        $data=$request->validate([
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_subject' => 'required',
            'contact_message' => 'required'
        ]);

        // Send e-mail
        Mail::to('mchikh@scs-net.org')->send(new ContactFormMail($data));
        return redirect('contact');
    }
}
