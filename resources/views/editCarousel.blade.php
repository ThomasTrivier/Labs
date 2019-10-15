@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit Carousel</h1>

    <form action="/admin/medias/{{$image->id}}/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="">Carousel Img</label>
          <div>
              <img src="/{{$image->media_path}}" alt="" height="250px" width="500px">
          </div>
          <input type="file" name="media_path" class="form-control-file" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop