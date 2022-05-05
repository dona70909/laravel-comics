@extends('layout.app')

@section('main-content')
    @include('partials.main.partials.jumbo') 
    <p>{{$comic["price"]}}</p>
@endsection