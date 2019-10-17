<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\Image;
use App\Categorie;
use App\Tag;
use App\Article;
use App\User;
use App\Comment;
use App\TagLien;

class BlogPostController extends Controller
{
    public function index($id){
        $nav = Navbar::find(1);
        $logo = Image::find(1);
        $categories = Categorie::all()->random(6);
        $tags = Tag::all()->random(8);
        $article = Article::find($id);
        $categorieArticle = Categorie::where('id',$article->categorie)->get();
        $user = User::where('id',$article->author)->get();
        $comments = Comment::where('article',$article->id)->get();
        $tagsArticle = TagLien::where('article',$article->id)->get();
        $tagsAll = Tag::all();
        return view('blog-post', compact('nav','logo','categories','tags','article','user','categorieArticle','comments','tagsArticle','tagsAll'));
    }

    public function create($id){
        $article = Article::find($id);
        $comment = new Comment;

        $comment->user_name = request('name');
        $comment->comment = request('message');
        $comment->article = $article->id;

        $comment->save();
        return redirect()->back();
    }
}
