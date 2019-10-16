<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\Image;
use App\Categorie;
use App\Tag;
use App\Article;
use App\User;

class BlogController extends Controller
{
    public function index(){
        $nav = Navbar::find(1);
        $logo = Image::find(1);
        $categories = Categorie::all()->random(6);
        $categorieArticle = Categorie::all();
        $tags = Tag::all()->random(8);
        $articles = Article::paginate(3);
        $users = User::all();
        return view('blog', compact('nav','logo','categories','tags','articles','users','categorieArticle'));
    }
}
