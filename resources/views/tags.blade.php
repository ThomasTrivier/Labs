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
              <h3 class="box-title">Tags Table</h3>
              <a href="{{route('tags.create')}}" class="btn btn-success">CREATE</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Tag</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach ($tags as $tag)
                  <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->tag}}</td>
                    <td>
                      <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary">UPDATE</a>
                    </td>
                    <td>
                      <form action="{{route('tags.destroy',$tag->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">DELETE</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@stop