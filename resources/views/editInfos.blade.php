@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit Infos</h1>

    <form action="/admin/infos/update" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="">Title</label>
          @if ($errors->has('title'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the title<span/>
            </div>
          @endif
          <input type="text" required name="title" value="{{$infos->title}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Description</label>
          @if ($errors->has('description'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the text<span/>
            </div>
          @endif
          <textarea name="description" required class="form-control" cols="30" rows="2">{{$infos->description}}</textarea>
        </div>

        <div class="form-group">
          <label for="">Building Name</label>
          @if ($errors->has('building_name'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the name<span/>
            </div>
          @endif
          <input type="text" required name="building_name" value="{{$infos->building_name}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Adress Part 1</label>
            @if ($errors->has('adress_part_1'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the adress<span/>
            </div>
          @endif
            <input type="text" required name="adress_part_1" value="{{$infos->adress_part_1}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        
        <div class="form-group">
            <label for="">Adress Part 2</label>
            @if ($errors->has('adress_part_2'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the adress<span/>
            </div>
          @endif
            <input type="text" required name="adress_part_2" value="{{$infos->adress_part_2}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        
        <div class="form-group">
          <label for="">Telephone</label>
          @if ($errors->has('tel'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the tel numbers<span/>
            </div>
          @endif
          <input type="text" required name="tel" value="{{$infos->tel}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Email</label>
          @if ($errors->has('email'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the email<span/>
            </div>
          @endif
          <input type="text" required name="email" value="{{$infos->email}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@stop