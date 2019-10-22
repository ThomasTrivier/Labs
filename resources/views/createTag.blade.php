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
          @if ($errors->has('tag'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the name<span/>
            </div>
          @endif
          <input type="text" required name="tag" value="{{old('tag')}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@stop