@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('css')
   <link rel="stylesheet" href="/css/flaticon.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">  
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection

@php
  $arr= [
      "flaticon-001-picture",
      "flaticon-002-caliper",
      "flaticon-003-energy-drink",
      "flaticon-004-build",
      "flaticon-005-thinking-1",
      "flaticon-006-prism",
      "flaticon-007-paint",
      "flaticon-008-team",
      "flaticon-009-idea-3",
      "flaticon-010-diamond",
      "flaticon-011-compass",
      "flaticon-012-cube",
      "flaticon-013-puzzle",
      "flaticon-014-magic-wand",
      "flaticon-015-book",
      "flaticon-016-vision",
      "flaticon-017-notebook",
      "flaticon-018-laptop-1",
      "flaticon-019-coffee-cup",
      "flaticon-020-creativity",
      "flaticon-021-thinking",
      "flaticon-022-branding",
      "flaticon-023-flask",
      "flaticon-024-idea-2",
      "flaticon-025-imagination",
      "flaticon-026-search",
      "flaticon-027-monitor",
      "flaticon-028-idea-1",
      "flaticon-029-sketchbook",
      "flaticon-030-computer",
      "flaticon-031-scheme",
      "flaticon-032-explorer",
      "flaticon-033-museum",
      "flaticon-034-cactus",
      "flaticon-035-smartphone",
      "flaticon-036-brainstorming",
      "flaticon-037-idea",
      "flaticon-038-graphic-tool-1",
      "flaticon-039-vector",
      "flaticon-040-rgb",
      "flaticon-041-graphic-tool",
      "flaticon-042-typography",
      "flaticon-043-sketch",
      "flaticon-044-paint-bucket",
      "flaticon-045-video-player",
      "flaticon-046-laptop",
      "flaticon-047-artificial-intelligence",
      "flaticon-048-abstract",
      "flaticon-049-projector",
      "flaticon-050-satellite",        
  ];
@endphp

@section('content')
    <h1>Create Service</h1>

    <form action="{{route('services.store')}}" method="POST">
        @csrf

        <div class="form-group">
          <label for="">Service Icon</label>
          @if ($errors->has('service_icon'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the icon<span/>
            </div>
          @endif
          <select class="selectpicker" name="service_icon">
            @foreach ($arr as $item)
                <option data-icon={{$item}} value={{$item}}></option> 
            @endforeach
          </select> 
        </div>

        <div class="form-group">
          <label for="">Service Title</label>
          @if ($errors->has('service_title'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the title<span/>
            </div>
          @endif
          <input type="text" required name="service_title" value="{{old('service_title')}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="">Description (min. 50 characters)</label>
          @if ($errors->has('description'))
            <div class=" row alert alert-danger">
              <span style="margin-left: 10px;">There is a problem with the text<span/>
            </div>
          @endif
          <input type="text" required name="description" value="{{old('description')}}" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop