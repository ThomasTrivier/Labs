@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('css')
    <link rel="stylesheet" href="/css/flaticon.css">
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Services Table</h3>
              <a href="{{route('services.create')}}" class="btn btn-success">CREATE</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Icon</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach ($services as $service)
                  <tr>
                    <td>{{$service->id}}</td>
                    <td class="icon">
                        <i class="{{$service->service_icon}}" style="font-size: 40px;"></i>
                    </td>
                    <td>{{$service->service_title}}</td>
                    <td>{{$service->description}}</td>
                    <td>
                      <a href="{{route('services.edit',$service->id)}}" class="btn btn-primary">UPDATE</a>
                    </td>
                    <td>
                      <form action="{{route('services.destroy',$service->id)}}" method="POST">
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