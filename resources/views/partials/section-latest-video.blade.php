@php
$queryV = new WP_Query([
    'post_type' => 'videos',
    'posts_per_page' => 1
]);
@endphp

@posts($queryV)
    <section class="latest-video latest--sand">
        <div class="container flex flex-row justify-between items-center">
            <div class="wrap-40">
                <span class="subtitle"><span class="nr">@field('video_nr').</span> Laatste video</span>
                <h3>@title</h3>
                <p>@field('samenvatting')</p>
                <a href="/family-life-on-wheels/" class="btn btn--black">Alle videos
                    <img src="@asset('images/arrow-white.svg')" alt="">
                </a>
            </div>
            <?php

            // Load value.
            $iframe = get_field('youtube_field');

            // Use preg_match to find iframe src.
            preg_match('/src="(.+?)"/', $iframe, $matches);
            $src = $matches[1];

            // Add extra parameters to src and replace HTML.
            $params = array(
                'controls'  => 0,
                'hd'        => 1,
                'autohide'  => 1
            );

            $new_src = add_query_arg($params, $src);
            $iframe = str_replace($src, $new_src, $iframe);

            // Add extra attributes to iframe HTML.
            $attributes = 'loading="lazy"';

            // use preg_replace to change iframe src to data-src
            $iframe = preg_replace('~<iframe[^>]*\K(?=src)~i','data-',$iframe);
            $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

           
            ?>
            <div class="wrap-55">
                <div class="embed-container">
                    @php
                        echo $iframe;
                    @endphp
                </div>
            </div>
        </div>
    </section>
@endposts