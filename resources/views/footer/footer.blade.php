<footer>
    @include('footer.partials.nav',["nav_links" => config("footer_nav")])
    @include('footer.partials.social',["footer_social_imgs" => config("social_nav")])
</footer>