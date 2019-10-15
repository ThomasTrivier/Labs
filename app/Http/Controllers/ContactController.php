<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\Image;
use App\Info;

class ContactController extends Controller
{
    public function index(){
        $nav = Navbar::find(1);
        $logo = Image::find(1);
        $infos = Info::find(1);
        return view('contact', compact('nav','logo','infos'));
    }
}
