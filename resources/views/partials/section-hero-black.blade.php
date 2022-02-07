@group('hero_black_text')  
<section class="hero-black-img flex flex-row">
    @group('content_left')
    <div class="wrap-50 bg--black flex flex-col items-start justify-center">
        @sub('text')
        @hassub('button')
        <a href="@sub('button', 'link')" class="btn btn--white">@sub('button', 'title')
            <img src="@asset('images/arrow-black.svg')" alt="">
        </a>
        @endsub
    </div>
    @endgroup
    <div class="wrap-50 wrap-img">
        <img src="@sub('img_right', 'url')" alt="@sub('img_right', 'alt')">
    </div>
</section>
@endgroup