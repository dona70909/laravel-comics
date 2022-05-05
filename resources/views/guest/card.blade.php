@extends('layout.app')


@section('header-content')
    <div class="banner-blue">
    </div> 
    @include('partials.header.header_nav',["nav_links_header" => config("header_nav")]) 
@endsection

@section('main-content')
<section class="card">
    @include('partials.main.partials.jumbo') 
    <div class="container-comic-cover position-absolute">
        <img src="{{$comic["thumb"]}}" alt="sdakoj">
    </div>
    <div class="banner-blue">

    </div>
    <div class="container-fluid">
        <div class="row justify-content-center p-4">
            
            <div class="col-7 card-description-box">
                <h3>{{$comic["title"]}}</h3>
                <div class="banner-price d-flex justify-content-between">
                    <h4>U.S. Price <span class="price-tag">{{$comic["price"]}}</span><h4>
                    <div class="available-box">
                        <h3 class="text-transform-uppercase d-inline">Available</h3>
                        <h3 class="box-check-available d-inline">Check Availability</h3>
                    </div>    
                </div>
                <p>{{$comic["description"]}}</p>
            </div>

            <div class="col-3">
                <img src="{{asset('img/adv.jpg')}}" alt="ad" class="img-fluid">
            </div>
            
        </div>

        <div class="row box-wrapper justify-content-center p-4">
            <div class="col-5 talent-box">
                
                <h3>Talent</h3>

                <div class="d-flex box talent-box-art">
                    <h4 class="me-4 flex-none">Art by:</h4>
                    <p>
                        @foreach($comic["artists"] as $artist)
                            {{$artist.", "}} 
                        @endforeach
                    </p> 
                </div>

                <div class="d-flex box talent-box-written">
                    <h4 class="me-4 flex-none">Written by:</h4>
                    <p>
                        @foreach($comic["writers"] as $writer)
                            {{$writer.", "}} 
                        @endforeach
                    </p> 
                </div>
            </div>

            <div class="col-5  spec-box">
                <h3>Spec</h3>
                <div class="spec-box-series">
                    <div class="d-flex justify-content-between box">
                        <h6>Series:</h6>
                        <h4 class="text-uppercase">{{$comic["series"]}}</h4>
                    </div>
                    <div class="d-flex justify-content-between box">
                        <h6>U.S Price:</h6>
                        <p class="text-uppercase">{{$comic["price"]}}</p>
                    </div>
                    <div class="d-flex justify-content-between last-box">
                        <h6>Series:</h6>
                        <p class="text-uppercase">{{$comic["sale_date"]}}</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    @include('partials.main.partials.logos') 
</section>
@endsection