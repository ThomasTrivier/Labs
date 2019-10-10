@extends('services.index')

@section('head')
    @include('home.head')
@endsection

@section('preloader')
    @include('home.preloader')
@endsection

@section('navbar')
    @include('services.navbar')
@endsection

@section('header')
    @include('services.header')
@endsection

@section('services')
    @include('home.services')
@endsection

@section('features')
    @include('services.features')
@endsection

@section('cards')
    @include('services.cards')
@endsection

@section('newsletter')
    @include('services.newsletter')
@endsection

@section('contact')
    @include('home.contact')
@endsection

@section('footer')
    @include('home.footer')
@endsection