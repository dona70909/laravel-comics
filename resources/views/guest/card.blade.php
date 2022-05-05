@extends('layout.app')

@section('main-content')
    @include('partials.main.partials.jumbo') 
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

        <div class="row talent-box justify-content-center p-4">
            <div class="col-5 ">
                <h3>Talent</h3>
                <div class="d-flex talent-box-art">
                    <h4 class="me-2 flex-none">Art by:</h4>
                    <p>
                        @foreach($comic["artists"] as $artist)
                            {{$artist.", "}} 
                        @endforeach
                    </p> 
                </div>

                <div class="d-flex talent-box-written">
                    <h4 class="me-2 flex-none">Written by:</h4>
                    <p>
                        @foreach($comic["writers"] as $writer)
                            {{$writer.", "}} 
                        @endforeach
                    </p> 
                </div>
            </div>

            <div class="col-5">
                <h3>Spec</h3>
            </div>
            
        </div>
    </div>
@endsection