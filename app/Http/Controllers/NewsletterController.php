<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function subscribe(){
        $sub = new Newsletter;

        $sub->email = request('email');

        $sub->save();
        return redirect()->back();
    }
}
