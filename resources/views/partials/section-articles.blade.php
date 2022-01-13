@group('section_articles')
<section class="articles-latest">
    <div class="container flex flex-row justify-between items-start">
        <div class="wrap-50 meditations">
            <h5>@sub('subtitel_meditaties')</h5>
            @php
            $queryM = new WP_Query([
                'post_type' => 'meditaties',
                'posts_per_page' => 1
            ]);
            @endphp
            @posts($queryM)
                @php
                    $author_id = get_the_author_meta('ID');
                    $author_field = get_field('user_profile_photo', 'user_'. $author_id );
                @endphp 
                <h3>@title</h3>
                <div class="meta-data flex flex-row justify-between items-center">
                    <div class="meta-left flex flex-row justify-start items-center">
                        <div class="author flex flex-row justify-start items-center">
                            <img src="<?= $author_field['url'] ?>" alt="" class="author-image">
                            <span>@author</span>
                        </div>
                        <span class="sep">|</span>
                        <div class="date">
                            <span>@published('j-m-Y')</span>
                        </div>
                        @hasfield('oembed_field')
                        <span class="sep">|</span>
                        <div class="read-time flex flex-row justify-start items-center">
                            <img src="@asset('images/youtube-black.svg')" alt="">
                            <span>met video</span>
                        </div>
                        @endfield
                    </div>
                </div>
                <div class="content-part">
                    <p><?php echo wp_trim_words(get_field('artikel'), 65); ?></p>
                </div>
                <a href="@permalink" class="btn btn--blue">Lees meer</a>
            @endposts
        </div>
        <div class="wrap-40">
            <h5>@sub('subtitel_wheels')</h5>
        </div>
    </div>
</section>
@endgroup