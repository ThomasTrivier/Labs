<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\About;

class WelcomeController extends Controller
{
    public function index(){
        $nav = Navbar::find(1);
        $about = About::find(1);
        return view('welcome', compact('nav','about'));
    }
}
