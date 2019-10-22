@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit Tag</h1>

    <form action="{{route('tags.update',$tag->id)}}" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="">Tag Name</label>
          @if ($errors->has('tag'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the name<span/>
            </div>
          @endif
          <input type="text" name="tag" value="{{$tag->tag}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@stop