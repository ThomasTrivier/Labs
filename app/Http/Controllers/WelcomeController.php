<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class WelcomeController extends Controller
{
    public function index(){
        $about = About::find(1);
        return view('welcome', compact('about'));
    }
}
