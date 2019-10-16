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
              <h3 class="box-title">Categories Table</h3>
              <a href="{{route('categories.create')}}" class="btn btn-success">CREATE</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Category</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach ($categories as $categorie)
                  <tr>
                    <td>{{$categorie->id}}</td>
                    <td>{{$categorie->category}}</td>
                    <td>
                      <a href="{{route('categories.edit',$categorie->id)}}" class="btn btn-primary">UPDATE</a>
                    </td>
                    <td>
                      <form action="{{route('categories.destroy',$categorie->id)}}" method="POST">
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