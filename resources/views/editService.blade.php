@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('css')
    <link rel="stylesheet" href="/css/flaticon.css">
@endsection

@section('content')
    <h1>Edit Service</h1>

    <form action="{{route('services.update',$service->id)}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="">Service Icon</label>
          @if ($errors->has('service_icon'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the icon<span/>
            </div>
          @endif
          <i class="{{$service->service_icon}}" style="font-size: 40px;"></i>
          <input type="text" required name="service_icon" value="{{$service->service_icon}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Service Title</label>
          @if ($errors->has('service_title'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the title<span/>
            </div>
          @endif
          <input type="text" required name="service_title" value="{{$service->service_title}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Description (min. 50 characters)</label>
          @if ($errors->has('description'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the text<span/>
            </div>
          @endif
          <input type="text" required name="description" value="{{$service->description}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@stop