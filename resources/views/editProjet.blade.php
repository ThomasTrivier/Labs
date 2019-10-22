@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit Project</h1>

    <form action="{{route('projects.update',$project->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for=""></label>
          @if ($errors->has('photo_path'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the photo<span/>
            </div>
          @endif
          <img src="{{asset($project->patch)}}" alt="">
          <input type="file" name="photo_path" class="form-control-file" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Title</label>
          @if ($errors->has('title'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the title<span/>
            </div>
          @endif
          <input type="text" required name="title" value="{{$project->title}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Description</label>
          @if ($errors->has('description'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the text<span/>
            </div>
          @endif
          <textarea name="description" required class="form-control" cols="30" rows="2">{{$project->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop