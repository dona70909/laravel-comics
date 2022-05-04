
<header class="my-header-content d-flex padding">
    <div class="my-header-logo">
        <img src="{{asset('img/dc-logo.png')}}" alt="logo">
    </div>
    <div class="my-header-nav">
        <ul class="d-flex my-link-list">
            @foreach($links as $link_item)
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
</header>