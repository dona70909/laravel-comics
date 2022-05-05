@extends('layout.app')

@section('main-content')
    @include('partials.main.partials.jumbo') 
    <div class="my-main-wrapper position-relative">

        <div class="box-current-series">
            <h4 class="box-title">Current Series</h4>
        </div>
        
        <div class="main-content-cards ">
            @foreach($comics as $index => $comicElement)
                <div class="main-card">
                    <img src="{{$comicElement["thumb"]}}" alt="{{$comicElement["series"]}}">
                    <a  href="{{route('card',['index' => $index]) }}">
                        <p>{{$comicElement["series"]}}</p>
                    </a> 
                </div>
            @endforeach
        </div>

        <div class="button-wrapper">
            <button class="load-more-btn"><a href="#">Load more</a></button>
        </div>
    </div>
    @include('partials.main.partials.logos') 
@endsection