@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Create Tag</h1>

    <form action="{{route('tags.store')}}" method="post">
        @csrf

        <div class="form-group">
          <label for="">Tag Name</label>
          <input type="text" name="tag" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@stop