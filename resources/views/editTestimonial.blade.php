@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit Testimonial</h1>

    <form action="{{route('testimonials.update',$testimonial->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="">Photo</label>
          <img src="{{asset($testimonial->patch)}}" alt="">
          <input type="file" name="photo_path" class="form-control-file" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Comment</label>
          <textarea name="comment" class="form-control" cols="30" rows="2">{{$testimonial->comment}}</textarea>
        </div>

        <div class="form-group">
          <label for="">Client Name</label>
          <input type="text" name="client_name" value="{{$testimonial->client_name}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Client Function</label>
          <input type="text" name="client_function" value="{{$testimonial->client_function}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop