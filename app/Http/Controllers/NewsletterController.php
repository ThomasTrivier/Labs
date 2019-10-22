<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use Validator;

class NewsletterController extends Controller
{
    public function subscribe(Request $req){
        $sub = new Newsletter;

        $validator = Validator::make($req->all(), [
            'email' => 'required|email:rfc,dns',
        ]);

        if ($validator->fails()) {
            return redirect('/services/#news')->withErrors($validator);
        }

        $sub->email = request('email');

        $sub->save();
        return redirect('/services');
    }
}
