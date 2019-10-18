@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Create Article</h1>

    <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for=""></label>
          <input type="file" name="article_photo" class="form-control-file" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Title</label>
          <input type="text" name="article_title" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Content</label>
          <textarea name="article_content" class="form-control" cols="30" rows="10"></textarea>
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
                    <input type="checkbox" name="{{$tag->tag}}" value="{{$tag->tag}}" autocomplete="off">
                    <label for="">{{$tag->tag}}</label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop