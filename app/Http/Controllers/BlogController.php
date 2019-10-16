<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\Image;
use App\Categorie;
use App\Tag;

class BlogController extends Controller
{
    public function index(){
        $nav = Navbar::find(1);
        $logo = Image::find(1);
        $categories = Categorie::all()->random(6);
        $tags = Tag::all()->random(8);
        return view('blog', compact('nav','logo','categories','tags'));
    }
}
