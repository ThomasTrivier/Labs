<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class FormController extends Controller
{
    public function create(){
        $contact = new Contact();

        request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'min:10'],
            'subject' => ['required', 'min:3'],
            'message' => ['required', 'min:10'],
        ]);

        //REDIRIGER VERS LE FORM EN CAS D'ERREUR ?

        $contact->name = request()->input("name");
        $contact->email = request()->input("email");
        $contact->subject = request()->input("subject");
        $contact->message = request()->input("message");

        $contact->save();

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
