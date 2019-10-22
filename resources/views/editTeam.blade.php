@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit Member</h1>

    <form action="{{route('teams.update',$member->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for=""></label>
          @if ($errors->has('photo_path'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the photo<span/>
            </div>
          @endif
          <img src="{{asset($member->patch)}}" alt="">
          <input type="file" name="photo_path" class="form-control-file" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Member Name</label>
          @if ($errors->has('member_name'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the name<span/>
            </div>
          @endif
          <input type="text" required name="member_name" value="{{$member->member_name}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Member Function</label>
          @if ($errors->has('member_function'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the function<span/>
            </div>
          @endif
          <input type="text" required name="member_function" value="{{$member->member_function}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop