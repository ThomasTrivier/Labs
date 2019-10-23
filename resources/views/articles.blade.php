@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Articles Table</h3>
              <a href="{{route('articles.create')}}" class="btn btn-success">CREATE</a>
              @if ($auth->role == 'admin')
                <a href="/publish" class="btn btn-primary">PUBLISH ({{$compteur}})</a>
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Photo</th>
                  <th>Article Title</th>
                  <th>Author</th>
                  <th>Category</th>
                  <th>Tags</th>
                  <th>Comments</th>
                  <th>Published</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach ($articles as $article)
                    @if ($auth->id == $article->author || $auth->role == "admin") 
                      <tr>
                        <td>{{$article->id}}</td>
                        <td>
                            <img src="{{asset($article->patch)}}" alt="" height="150px" width="300px">
                        </td>
                        <td>{{$article->article_title}}</td>
                        <td>{{$auth->name}}</td>
                        @foreach ($categories as $categorie)
                            @if ($article->categorie === $categorie->id)
                                <td>{{$categorie->category}}</td>
                            @endif
                        @endforeach
                        <td>
                          <ul style="list-style: none;padding: 0;">
                            @foreach ($article->tags()->get() as $tag)
                                <li>{{$tag->tag}}</li> 
                            @endforeach
                          </ul>
                        </td>
                        <td>{{$article->commentaires()->count()}}</td>
                        <td>{{($article->published == true) ? "Oui" : "Non"}}</td>
                        <td>
                          <a href="{{route('articles.edit',$article->id)}}" class="btn btn-primary">UPDATE</a>
                        </td>
                        <td>
                          <form action="{{route('articles.destroy',$article->id)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">DELETE</button>
                          </form>
                        </td>
                      </tr>
                    @endif
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@stop