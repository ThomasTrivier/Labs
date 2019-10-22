@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Create Project</h1>

    <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="">Photo</label>
          @if ($errors->has('photo_path'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the photo<span/>
            </div>
          @endif
          <input type="file" required name="photo_path" class="form-control-file" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Title</label>
          @if ($errors->has('title'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the title<span/>
            </div>
          @endif
          <input type="text" required name="title" value="{{old('title')}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Description</label>
          @if ($errors->has('description'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the text<span/>
            </div>
          @endif
          <textarea class="form-control" required name="description" cols="30" rows="3">{{old('description')}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop