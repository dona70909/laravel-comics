<div class="my-footer-wrap">

    <div class="my-footer-container-links d-flex padding position-relative">
        <div class="my-footer-nav d-flex">
            <ul>
                @foreach($nav_links["linkFooterComics"] as $link)
                    <li>{{$link["text"]}}</li>
                @endforeach
            </ul>

            <ul>
                @foreach($nav_links["linkFooterDc"] as $link_dc)
                    <li>{{$link_dc["text"]}}</li>
                @endforeach
            </ul>
            
            <ul>
                @foreach($nav_links["linkFooterSites"] as $link_site)
                    <li>{{$link_site["text"]}}</li>
                @endforeach
            </ul>

            {{--  <ul>
                @foreach($nav_links["linkFooterShop"] as $item)
                    <li>{{$item["text"]}}</li>
                @endforeach
            </ul> --}}
        </div>    
    </div>

</div>