<div class="my-footer-sign-up d-flex padding position-relative">
    <div>
        <button><a href="#">Sign-up now</a></button>
    </div>

    <div class="d-flex my-social-wrapper">
        <a href="#">Follow us</a>
        
        <ul class="d-flex">
            @foreach($footer_social_imgs as $img)
                <li>
                    <img src="img/{{$img}}" alt="img socail">
                </li>
            @endforeach
        </ul>
    </div>
</div>