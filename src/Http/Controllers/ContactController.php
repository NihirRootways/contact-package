<?php

namespace Nihir\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Nihir\Contact\Http\Models\Contact;
use Nihir\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }
    public function send(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        // Mail::to(env('MAIL_TO'))->send(new ContactMailable($request->message,$request->name));
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ]);
        return redirect()->route('contact.index')->with('message','Mail sent successfully');
    }
}
