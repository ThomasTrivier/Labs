@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Create Testimonial</h1>

    <form action="{{route('testimonials.store')}}" method="POST" enctype="multipart/form-data">
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
          <label for="">Comment</label>
          @if ($errors->has('comment'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the comment<span/>
            </div>
          @endif
          <textarea name="comment" required class="form-control" cols="30" rows="3">{{old('comment')}}</textarea>
        </div>

        <div class="form-group">
          <label for="">Client Name</label>
          @if ($errors->has('client_name'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the name<span/>
            </div>
          @endif
          <input type="text" required name="client_name" value="{{old('client_name')}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Client Function</label>
          @if ($errors->has('client_function'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the function<span/>
            </div>
          @endif
          <input type="text" required name="client_function" value="{{old('client_function')}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop