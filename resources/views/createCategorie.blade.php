@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Create Categorie</h1>

    <form action="{{route('categories.store')}}" method="post">
        @csrf

        <div class="form-group">
          <label for="">Category Name</label>
          <input type="text" name="category" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@stop