<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;

class BlogController extends Controller
{
    public function index(){
        $nav = Navbar::find(1);
        return view('blog', compact('nav'));
    }
}
