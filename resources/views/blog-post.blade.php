@extends('blog-post.index')

@section('head')
    @include('home.head')
@endsection

@section('preloader')
    @include('home.preloader')
@endsection

@section('navbar')
    @include('blog.navbar')
@endsection

@section('header')
	@include('blog.header')
@endsection

@section('page')
	@include('blog-post.page')
@endsection

@section('newsletter')
	@include('services.newsletter')
@endsection

@section('footer')
	@include('home.footer')
@endsection