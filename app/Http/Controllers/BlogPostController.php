<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Navbar;
use App\Image;
use App\Categorie;
use App\Tag;
use App\Article;
use App\User;
use App\Comment;
use App\ArticleTag;

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
        $tagsArticle = ArticleTag::where('article_id',$article->id)->get();
        $tagsAll = Tag::all();
        return view('blog-post', compact('nav','logo','categories','tags','article','user','categorieArticle','comments','tagsArticle','tagsAll'));
    }

    public function create(Request $req, $id){
        $article = Article::find($id);
        $comment = new Comment;

        $validator = Validator::make($req->all(), [
            'name'    => 'required|string',
            'email'   => 'required|email:rfc,dns',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/blog-post/'.$id.'/#comment-form')->withErrors($validator)->withInput();
        }

        $comment->user_name = request('name');
        $comment->comment = request('message');
        $comment->article = $article->id;

        $comment->save();
        return redirect()->back();
    }
}
