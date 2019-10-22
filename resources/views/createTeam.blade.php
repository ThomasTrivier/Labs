@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Create Member</h1>

    <form action="{{route('teams.store')}}" method="POST" enctype="multipart/form-data">
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
          <label for="">Member Name</label>
          @if ($errors->has('member_name'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the name<span/>
            </div>
          @endif
          <input type="text" required name="member_name" value="{{old('member_name')}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Member Function</label>
          @if ($errors->has('member_function'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the function<span/>
            </div>
          @endif
          <input type="text" required name="member_function" value="{{old('member_function')}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop