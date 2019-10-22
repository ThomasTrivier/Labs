@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Create Service</h1>

    <form action="{{route('services.store')}}" method="POST">
        @csrf

        <div class="form-group">
          <label for="">Service Icon</label>
          @if ($errors->has('service_icon'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the icon<span/>
            </div>
          @endif
          <input type="text" required name="service_icon" value="{{old('service_icon')}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Service Title</label>
          @if ($errors->has('service_title'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the title<span/>
            </div>
          @endif
          <input type="text" required name="service_title" value="{{old('service_title')}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Description</label>
          @if ($errors->has('description'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the text<span/>
            </div>
          @endif
          <input type="text" required name="description" value="{{old('description')}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop