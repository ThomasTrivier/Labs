<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use Validator;

class NewsletterController extends Controller
{
    public function subscribe(Request $req){
        $host = back();
        $sub = new Newsletter;

        $validator = Validator::make($req->all(), [
            'mail' => 'required|email:rfc,dns|unique:newsletters',
        ]);

        if ($validator->fails()) {
            if ($host->getSession()->get('_previous')['url'] == 'http://127.0.0.1:8000/services') {
                return redirect('/services/#news')->withErrors($validator);
            } else {
                return redirect('/blog/#news')->withErrors($validator);
            }
        }

        $sub->email = request('mail');

        $sub->save();
        return redirect('/services');
    }
}
