@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Email</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach ($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        <img src="{{asset($user->patch)}}" alt="" height="100px" width="100px">
                    </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">UPDATE</a>
                    </td>
                    <td>
                      <form action="{{route('users.destroy',$user->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">DELETE</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@stop