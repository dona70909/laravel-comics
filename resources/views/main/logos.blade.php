<div class="my-main-content-menu padding">
    <div class="my-main-nav">
        <ul class="d-flex my-link-list" >
            @foreach($logos as $logo)
                <li class="my-link-item d-flex">
                    
                    <div class="my-link-text-wrap">
                        <p>{{$logo["text"]}}</p>
                    </div>      
                </li>
            @endforeach 
        </ul>
    </div>
</div>