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
          <input type="text" name="service_icon" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Service Title</label>
          <input type="text" name="service_title" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Description</label>
          <input type="text" name="description" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop