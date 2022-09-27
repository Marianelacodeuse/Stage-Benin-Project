<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'subject' => ['required', 'string'],
            'msg' => ['required', 'string'],
        ]);

        // $newContact= new Contact();
        // $newContact->name=$request->name;
        // $newContact->email=$request->email;
        // $newContact->subject=$request->subject;
        // $newContact->message=$request->msg;
        // $newContact->save();
        $mailable = new ContactMessage($request->name, $request->email, $request->subject, $request->msg);
        Mail::to('admin@gmail.com')->send($mailable);
        return back()->with('message', 'Message envoyer avec succès');
    }
}
