<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Categorie;
use App\Tag;
use App\ArticleTag;
use App\Comment;
use App\User;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $users = User::all();
        $categories = Categorie::all();
        return view('articles', compact('articles','users','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('createArticle', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $article = new Article;
        $tags = ArticleTag::all();

        if ($req->hasFile('article_photo')) {
            $file = $req->file("article_photo");
            $fileName = $file->store(env('ARTICLE_THUMB_DIR'));
            $article->article_photo = $fileName;
        }

        $article->article_title = request('article_title');
        $article->author = Auth::id();
        $article->article_content = request('article_content');
        $article->categorie = request('categorie');
        //tags

        $article->save();
        return redirect()->route('articles.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('editArticle', compact('article','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $article = Article::find($id);
        $tags = ArticleTag::all();
        ArticleTag::where('article_id',$article->id)->delete();

        if ($req->hasFile('article_photo')) {
            $file = $req->file("article_photo");
            $fileName = $file->store(env('ARTICLE_THUMB_DIR'));
            $article->article_photo = $fileName;
        }

        $article->article_title = request('article_title');
        $article->article_content = request('article_content');
        $article->categorie = request('categorie');
        //tags

        $article->save();
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $photo = $article->article_photo;
        $res = $article->delete();

        if ($res) {
            if ($photo && Storage::disk('public')->has("photo")) {
                Storage::disk('public')->delete("photo");
            }
        }
        return redirect()-> back();
    }
}
