
<section class="my-header-content d-flex padding">

    <div class="my-header-logo">
        <img src="{{asset('img/dc-logo.png')}}" alt="logo">
    </div>
    <div class="my-header-nav">
        <ul class="d-flex my-link-list">
            
            <li class="my-link-item">
                <a class="header-link" href="{{@url("/")}}">
                    Comics Cards
                </a>
            </li>

            <li class="my-link-item">
                <a class="header-link" href="{{@url("/home")}}">
                    Home
                </a>
            </li>
            @foreach($nav_links_header as $link_item)
                @if ($loop->first)
                    <li class="my-link-item">
                        <a class="header-link" href="{{@route("characters")}}">
                            {{ $link_item["text"] }}
                        </a>
                    </li>
                @else
                    <li class="my-link-item">
                        <a class="header-link" href="{{$link_item["url"]}}">
                            {{ $link_item["text"] }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

</section>