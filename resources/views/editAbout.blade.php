@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit About</h1>

    <form action="/admin/about/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="">Title Left</label>
          @if ($errors->has('title_left'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">Title Left Required<span/>
            </div>
          @endif
          <input type="text" required name="title_left" value="{{$about->title_left}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Span</label>
          @if ($errors->has('span'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">Span Required<span/>
            </div>
          @endif
          <input type="text" required name="span" value="{{$about->span}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Title Right</label>
          @if ($errors->has('title_right'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">Title Right Required<span/>
            </div>
          @endif
          <input type="text" required name="title_right" value="{{$about->title_right}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Text Left</label>
          @if ($errors->has('text_left'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">Text Required<span/>
            </div>
          @endif
          <textarea name="text_left" required class="form-control" cols="30" rows="3">{{$about->text_left}}</textarea>
        </div>

        <div class="form-group">
          <label for="">Text Right</label>
          @if ($errors->has('text_right'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">Text Required<span/>
            </div>
          @endif
          <textarea name="text_right" required class="form-control" cols="30" rows="3">{{$about->text_right}}</textarea>
        </div>

        <div class="form-group">
          <label for="">Button Text</label>
          @if ($errors->has('button_text'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">Text Required<span/>
            </div>
          @endif
          <input type="text" required name="button_text" value="{{$about->button_text}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for=""></label>
          <img src="{{asset($about->patch)}}" alt="">
          @if ($errors->has('preview'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">Photo Required<span/>
            </div>
          @endif
          <input type="file" required name="preview" class="form-control-file" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Video URL</label>
          @if ($errors->has('video_url'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">URL Required<span/>
            </div>
          @endif
          <input type="text" required name="video_url" value="{{$about->video_url}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@stop