@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit Article</h1>

    <form action="{{route('articles.update',$article->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for=""></label>
          <img src="{{asset($article->patch)}}" alt="">
          @if ($errors->has('article_photo'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the photo<span/>
            </div>
          @endif
          <input type="file" name="article_photo" class="form-control-file" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Title</label>
          @if ($errors->has('article_title'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the title<span/>
            </div>
          @endif
          <input type="text" required name="article_title" value="{{$article->article_title}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Content</label>
          @if ($errors->has('article_content'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the content<span/>
            </div>
          @endif
          <textarea name="article_content" required class="form-control" cols="30" rows="10">{{$article->article_content}}</textarea>
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
            @foreach ($articleTags as $tag)
              <div>
                <input type="checkbox" name="{{$tag->tag}}" value="{{$tag->tag}}" checked autocomplete="off">
                <label for="">{{$tag->tag}}</label>
              </div>  
            @endforeach
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