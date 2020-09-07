<?php

namespace Kushal\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Kushal\Contact\Mail\ContactMail;
use Kushal\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact-us');
    }

    public function sendEmail(Request $request){
        $data = $request->all();
        Mail::to(config('contact.send_email_to'))->send(new ContactMail($data));
        Contact::create($data);
        return redirect(route('contact.show'));
    }
}
