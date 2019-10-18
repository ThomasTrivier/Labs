@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit User</h1>

    <form action="{{route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for=""></label>
          <img src="{{asset($user->patch)}}" alt="">
          <input type="file" name="photo_path" class="form-control-file" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">User Name</label>
          <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Role</label>
          <select name="role">
              <option value="guest" {{($user->role == "guest") ? 'selected' : ''}}>Guest</option>
              <option value="editor" {{($user->role == "editor") ? 'selected' : ''}}>Editor</option>
              <option value="admin" {{($user->role == "admin") ? 'selected' : ''}}>Admin</option>
          </select>
        </div>

        <div class="form-group">
          <label for="">Description</label>
          <textarea name="description" class="form-control" cols="30" rows="3">{{$user->description}}</textarea>
        </div>

        <div class="form-group">
          <label for="">User Email</label>
          <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">New Password</label>
          <input type="text" name="password" class="form-control" placeholder="Password" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop