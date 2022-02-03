@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @php
      $author_id = get_the_author_meta('ID');
      $author_field = get_field('user_profile_photo', 'user_'. $author_id );
  @endphp
    <main class="container--small meditation-article">
        <div class="embed-container">
            @field('youtube_field')
        </div>
        <article class="container-content article-content">
            <h1>@field('video_nr'). @title</h1>

            @field('samenvatting')

            <div class="meta-data foot flex flex-row justify-between items-center">
                <div class="meta-left flex flex-row justify-start items-center">
                    @hasfield('youtube_field')
                        @php
                            $youtube_video_url = get_field('youtube_field', false, false);
                        @endphp
                        
                        <a href="{{ $youtube_video_url }}" target="_blank" class="to-ytb flex flex-row justify-start items-center">
                            <img src="@asset('images/youtube-black.svg')" alt="">
                            <span>Bekijk op YouTube</span>
                        </a>

                    @endfield
                </div>
                <div class="meta-social flex flex-row items-center justify-end">
                    <span>Delen</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo home_url( $wp->request ); ?>" target="_blank">
                        <img src="@asset('images/facebook-black.svg')" alt="">
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?url=<?php echo home_url( $wp->request ); ?>" target="_blank">
                        <img src="@asset('images/linkedin-black.svg')" alt="">
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo home_url( $wp->request ); ?>" target="_blank">
                        <img src="@asset('images/twitter-black.svg')" alt="">
                    </a>
                    <a href="https://wa.me/?text=<?php echo home_url( $wp->request ); ?>" target="_blank">
                        <img src="@asset('images/whatsapp-black.svg')" alt="">
                    </a>
                </div>
            </div>
        </article>
    </main>
  @endwhile
@endsection
