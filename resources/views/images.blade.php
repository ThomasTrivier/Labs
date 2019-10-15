@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Medias List</h2>

<form action="/admin/medias/logo" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">
      <label for="">Edit Logo</label>
      <div>
          <img src="{{asset($logo->patch)}}" alt="" height="50px" width="150px">
      </div>
      <input type="file" class="form-control-file" name="media_path" aria-describedby="helpId" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Carousel Table</h3>
              <a href="/admin/medias/create" class="btn btn-success">CREATE</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Carousel Img</th>
                  <th>Placement</th>
                </tr>
                @foreach ($images as $image)
                  <tr>
                    <td>{{$image->id}}</td>
                    <td>
                        <img src="{{asset($image->patch)}}" alt="" height="150px" width="300px">
                    </td>
                    <td>{{$image->placement}}</td>
                    <td>
                      <a href="/admin/medias/{{$image->id}}/edit" class="btn btn-primary">UPDATE</a>
                    </td>
                    <td>
                      <a href="/admin/medias/{{$image->id}}/delete" class="btn btn-danger">DELETE</a>
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