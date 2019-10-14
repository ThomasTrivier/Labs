@extends('blog.index')

@section('head')
    @include('home.head')
@endsection

@section('preloader')
    @include('home.preloader')
@endsection

@section('navbar')
    @include('home.navbar')
@endsection

@section('header')
	@include('blog.header')
@endsection

@section('page')
	@include('blog.page')
@endsection

@section('newsletter')
	@include('services.newsletter')
@endsection

@section('footer')
	@include('home.footer')
@endsection