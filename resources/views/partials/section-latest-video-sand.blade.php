@php
$queryX = new WP_Query([
    'post_type' => 'videos',
    'posts_per_page' => 1
]);
@endphp

@posts($queryX)
    <section class="latest-video latest--blue">
        <div class="container flex flex-row justify-between items-center">
            <div class="wrap-40">
                <span class="subtitle"><span class="nr">@field('video_nr').</span> Laatste video</span>
                <h3>@title</h3>
                <p>@field('samenvatting')</p>
                <a href="/videos/" class="btn btn--white">Alle videos
                    <img src="@asset('images/arrow-black.svg')" alt="">
                </a>
            </div>
            <div class="wrap-55">
                <div class="embed-container">
                    @field('youtube_field')
                </div>
            </div>
        </div>
    </section>
@endposts