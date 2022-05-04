<div class="my-main-content-menu padding">
    <div class="my-main-nav">
        <ul class="d-flex my-link-list">
            @foreach ($logos_dc_main as $logo)
                <li class="my-link-item d-flex">
                    <img src="" />
                    <div class="my-link-text-wrap">
                        <p>{{$logo["text"]}}</p>
                    </div>      
                </li>
            @endforeach
        </ul>
    </div>
</div>