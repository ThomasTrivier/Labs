<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Navbar;
use App\Image;
use App\Categorie;
use App\Tag;
use App\Article;
use App\User;
use App\ArticleTag;
use App\Comment;

class BlogController extends Controller
{
    public function index(){
        $nav = Navbar::find(1);
        $logo = Image::find(1);
        $categories = Categorie::all()->random(6);
        $categorieArticle = Categorie::all();
        $tags = Tag::all()->random(8);
        $articles = Article::where('published',true)->orderBy('id','desc')->paginate(3);
        $users = User::all();
        $tagsArticle = ArticleTag::all();
        $tagsAll = Tag::all();
        return view('blog', compact('nav','logo','categories','tags','articles','users','categorieArticle','tagsArticle','tagsAll'));
    }

    public function search(){
        $nav = Navbar::find(1);
        $logo = Image::find(1);
        $categories = Categorie::all()->random(6);
        $categorieArticle = Categorie::all();
        $tags = Tag::all()->random(8);
        $articles = Article::all()->sortByDesc('id')->where('published',true);
        $users = User::all();
        $tagsArticle = ArticleTag::all();
        $tagsAll = Tag::all();
        $searchs = [];
        foreach ($articles as $article) {
            if (Str::contains($article->article_title,request('search'))) {
                array_push($searchs,$article);
            }
        }
        return view('search', compact('nav','logo','categories','tags','searchs','users','categorieArticle','tagsArticle','tagsAll'));
    }

    public function searchCategorie($id){
        $nav = Navbar::find(1);
        $logo = Image::find(1);
        $categories = Categorie::all()->random(6);
        $categorieArticle = Categorie::all();
        $tags = Tag::all()->random(8);
        $searchs = Article::where('published',true)->where('categorie',$id)->get();
        $searchs->sortByDesc('id');
        $users = User::all();
        $tagsArticle = ArticleTag::all();
        $tagsAll = Tag::all();
        return view('searchCategorie', compact('nav','logo','categories','tags','users','searchs','categorieArticle','tagsArticle','tagsAll'));
    }

    public function searchTag($id){
        $nav = Navbar::find(1);
        $logo = Image::find(1);
        $categories = Categorie::all()->random(6);
        $categorieArticle = Categorie::all();
        $tags = Tag::all()->random(8);
        $articles = Article::all()->sortByDesc('id')->where('published',true);
        $users = User::all();
        $tagsArticle = ArticleTag::all();
        $tagsAll = Tag::all();
        $searchs = [];
        foreach ($articles as $article) {
            $randoms = $article->tags()->get();
            foreach ($randoms as $random) {
                if ($random->id == $id) {
                    array_push($searchs,$article);
                }
            }
        }
        return view('searchTag', compact('nav','logo','categories','tags','searchs','users','categorieArticle','tagsArticle','tagsAll'));
    }
}
