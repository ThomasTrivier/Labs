@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Create Carousel Img</h1>

    <form action="/admin/medias/store" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="">Carousel Img</label>
          @if ($errors->has('media_path'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the photo<span/>
            </div>
          @endif
          <input type="file" required name="media_path" class="form-control-file" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop