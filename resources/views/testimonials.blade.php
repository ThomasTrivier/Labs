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
              <h3 class="box-title">Testimonials Table</h3>
              <a href="{{route('testimonials.create')}}" class="btn btn-success">CREATE</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Photo</th>
                  <th>Comment</th>
                  <th>Client Name</th>
                  <th>Client Function</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach ($testimonials as $testimonial)
                  <tr>
                    <td>{{$testimonial->id}}</td>
                    <td class="avatar">
                        <img src="{{asset($testimonial->patch)}}" alt="">
                    </td>
                    <td>{{$testimonial->comment}}</td>
                    <td>{{$testimonial->client_name}}</td>
                    <td>{{$testimonial->client_function}}</td>
                    <td>
                      <a href="{{route('testimonials.edit',$testimonial->id)}}" class="btn btn-primary">UPDATE</a>
                    </td>
                    <td>
                      <form action="{{route('testimonials.destroy',$testimonial->id)}}" method="POST">
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