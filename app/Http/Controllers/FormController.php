<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSent;
use App\Http\Requests\StoreContact;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use Validator;

class FormController extends Controller
{
    public function create(Request $req){
        $contact = new Contact();

        $validator = Validator::make($req->all(), [
            'name'    => 'required|string',
            'email'   => 'required|email:rfc,dns',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/#con_form')->withErrors($validator)->withInput();
        }

        $contact->name = request()->input("name");
        $contact->email = request()->input("email");
        $contact->subject = request()->input("subject");
        $contact->message = request()->input("message");

        $contact->save();
        Mail::to(request('email'))->send(new ContactSent($contact));

        return redirect()->back();
    }

    public function index(){
        $messages = Contact::all();
        return view("contacts", compact('messages'));
    }

    public function delete($id){
        Contact::where('id', $id)->delete();
        return redirect()->back();
    }
}
