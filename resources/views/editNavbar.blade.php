@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit Navbar</h1>

    <form action="/admin/navbar/update" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="">Navbar Link 1</label>
          <input type="text" name="nav1" value="{{$nav->nav1}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Navbar Link 2</label>
          <input type="text" name="nav2" value="{{$nav->nav2}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Navbar Link 3</label>
          <input type="text" name="nav3" value="{{$nav->nav3}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Navbar Link 4</label>
          <input type="text" name="nav4" value="{{$nav->nav4}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@stop