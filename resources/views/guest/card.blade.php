@extends('layout.app')

@section('main-content')
    @include('partials.main.partials.jumbo') 
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="col-7">
                    <h3>{{$comic["description"]}}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection