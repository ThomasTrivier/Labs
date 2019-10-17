@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit Article</h1>

    <form action="{{route('articles.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for=""></label>
          <img src="{{$article->article_photo}}" alt="">
          <input type="file" name="article_photo" class="form-control-file" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Title</label>
          <input type="text" name="article_title" value="{{$article->article_title}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Content</label>
          <textarea name="article_content" class="form-control" cols="30" rows="10">{{$article->article_content}}</textarea>
        </div>

        <div class="form-group">
          <label for="">Categorie</label>
          <select name="categorie">
              @foreach ($categories as $categorie)
                  <option value="{{$categorie->id}}">{{$categorie->category}}</option>
              @endforeach
          </select>
        </div>

        <div class="form-group">
            <label for="">Tags</label>
            @foreach ($tags as $tag)
                <div>
                    <input type="checkbox" name="tag" value="{{$tag->tag}}" autocomplete="off">
                    <label for="">{{$tag->tag}}</label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop