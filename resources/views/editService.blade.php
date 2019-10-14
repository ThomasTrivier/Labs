@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit Service</h1>

    <form action="{{route('services.update',$service->id)}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="">Service Icon</label>
          <input type="text" name="service_icon" value="{{$service->service_icon}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Service Title</label>
          <input type="text" name="service_title" value="{{$service->service_title}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Description</label>
          <input type="text" name="description" value="{{$service->description}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@stop