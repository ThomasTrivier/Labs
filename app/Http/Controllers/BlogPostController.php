<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\Image;
use App\Categorie;
use App\Tag;
use App\Article;
use App\User;

class BlogPostController extends Controller
{
    public function index($id){
        $nav = Navbar::find(1);
        $logo = Image::find(1);
        $categories = Categorie::all()->random(6);
        $tags = Tag::all()->random(8);
        $article = Article::find($id);
        return view('blog-post', compact('nav','logo','categories','tags','article'));
    }
}
