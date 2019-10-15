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
              <h3 class="box-title">Projects Table</h3>
              <a href="{{route('projects.create')}}" class="btn btn-success">CREATE</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Photo</th>
                  <th>Title</th>
                  <th>Description</th>
                </tr>
                @foreach ($projects as $project)
                  <tr>
                    <td>{{$project->id}}</td>
                    <td class="avatar">
                        <img src="{{asset($project->patch)}}" alt="">
                    </td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td>
                      <a href="{{route('projects.edit',$project->id)}}" class="btn btn-primary">UPDATE</a>
                    </td>
                    <td>
                      <form action="{{route('projects.destroy',$project->id)}}" method="POST">
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