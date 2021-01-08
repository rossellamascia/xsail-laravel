<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactPartnerController extends Controller
{

    public function contactSave(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->fullname = $request->input('fullname');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();

        Mail::to('sendto@email.com')->send(new ContactPartner($contact));
        Mail::to($contact->email)->send(new ContactPartner($contact));
        return redirect()->back()->with('message', 'Email invita con successo');
    }
}
