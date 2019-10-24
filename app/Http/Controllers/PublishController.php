<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ArticlePublished;
use Illuminate\Support\Facades\Mail;
use App\Article;
use App\Newsletter;

class PublishController extends Controller
{
    public function index(){
        $articles = Article::all()->sortBy('id');
        return view('articlePublish', compact('articles'));
    }

    public function publish(Request $req){
        $articles = Article::all();
        $subs = Newsletter::all()->take(-2);

        foreach ($articles as $article) {
            if (request($article->id) == "Oui") {
                $article->published = true;
                $article->save();
            }else{
                $article->published = false;
                $article->save();
            }
        }

        foreach ($subs as $sub) {
            Mail::to($sub->email)->send(new ArticlePublished($article));
        }

        return redirect()->route('articles.index');
    }
}
