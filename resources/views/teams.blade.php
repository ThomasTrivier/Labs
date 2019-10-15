@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<form action="/admin/leader" method="post">
    @csrf
    @method('PATCH')

    <h3>Choose your leader</h3>
    <select name="leader">
        @foreach ($teams as $leader)
            <option value="{{$leader->id}}">Member {{$leader->id}}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Teams Table</h3>
              <a href="{{route('teams.create')}}" class="btn btn-success">CREATE</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Photo</th>
                  <th>Leader</th>
                  <th>Member Name</th>
                  <th>Member Function</th>
                </tr>
                @foreach ($teams as $team)
                  <tr>
                    <td>{{$team->id}}</td>
                    <td class="avatar">
                        <img src="{{asset($team->patch)}}" alt="" height="150px" width="125px">
                    </td>
                    <td>{{$team->leader}}</td>
                    <td>{{$team->member_name}}</td>
                    <td>{{$team->member_function}}</td>
                    <td>
                      <a href="{{route('teams.edit',$team->id)}}" class="btn btn-primary">UPDATE</a>
                    </td>
                    <td>
                      <form action="{{route('teams.destroy',$team->id)}}" method="POST">
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