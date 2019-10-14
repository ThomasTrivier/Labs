@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit About</h1>

    <form action="/admin/about/update" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="">Title Left</label>
          <input type="text" name="title_left" value="{{$about->title_left}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Span</label>
          <input type="text" name="span" value="{{$about->span}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Title Right</label>
          <input type="text" name="title_right" value="{{$about->title_right}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Text Left</label>
          <textarea name="text_left" class="form-control" cols="30" rows="3">{{$about->text_left}}</textarea>
        </div>

        <div class="form-group">
          <label for="">Text Right</label>
          <textarea name="text_right" class="form-control" cols="30" rows="3">{{$about->text_right}}</textarea>
        </div>

        <div class="form-group">
          <label for="">Button Text</label>
          <input type="text" name="button_text" value="{{$about->button_text}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Video URL</label>
          <input type="text" name="video_url" value="{{$about->video_url}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@stop