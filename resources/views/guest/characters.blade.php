@extends('layout.app')

@section('header-content')
    @include('partials.header.header_nav',["nav_links_header" => config("header_nav")]) 
@endsection

@section('main-content')
    @include('partials.main.partials.jumbo') 
@endsection 
