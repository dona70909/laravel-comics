<div class="my-main-wrapper position-relative">

    <div class="box-current-series">
        <h4>Current Series</h4>
    </div>
    <div class="main-content-cards ">
        @foreach($comics as $comic)
            <div class="main-card">
                <img src="{{$comic["thumb"]}}" alt="{{$comic["series"]}}">
                <p>{{$comic["series"]}}</p> 
            </div>
        @endforeach
    </div>

    <div class="button-wrapper">
        <button class="load-more-btn"><a href="#">Load more</a></button>
    </div>
</div>