@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Articles Published</h2>
    <form action="/published" method="POST">
        @csrf
        @method('PATCH')

        @foreach ($articles as $article)
            <div>
                <label for="">{{$article->article_title}}</label>
                <select name="{{$article->id}}">
                    <option value="Oui" {{($article->published == true) ? 'selected' : ''}}>Oui</option>
                    <option value="Non" {{($article->published == false) ? 'selected' : ''}}>Non</option>
                </select>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop