@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>Edit Infos</h1>

    <form action="/infos/update" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="">Title</label>
          <input type="text" name="title" value="{{$infos->title}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Description</label>
          <textarea name="description" class="form-control" cols="30" rows="2">{{$infos->description}}</textarea>
        </div>

        <div class="form-group">
          <label for="">Building Name</label>
          <input type="text" name="building_name" value="{{$infos->building_name}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Adress Part 1</label>
            <input type="text" name="adress_part_1" value="{{$infos->adress_part_1}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        
        <div class="form-group">
            <label for="">Adress Part 2</label>
            <input type="text" name="adress_part_2" value="{{$infos->adress_part_2}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        
        <div class="form-group">
          <label for="">Telephone</label>
          <input type="text" name="tel" value="{{$infos->tel}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="email" value="{{$infos->email}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@stop