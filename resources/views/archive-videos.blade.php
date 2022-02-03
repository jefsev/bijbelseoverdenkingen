@extends('layouts.app')

@section('content')

    <section class="archive-header container flex flex-row items-center justify-start">
        <img src="@asset('images/tag-title.svg')" alt="">
        <h1><?php post_type_archive_title(); ?></h1>
    </section>

    <section class="container container-all-videos">     
        <div class="row-videos flex flex-row flex-wrap justify-between">
            @while(have_posts()) @php the_post() @endphp
                    @php
                        $video_url = get_field('youtube_field', FALSE, FALSE); //URL
                        $video_thumb_url = App\get_video_thumbnail_uri($video_url); //get THumbnail via our functions 
                    @endphp

                    <a href="@permalink" class="item-video">
                        <img src="{{$video_thumb_url}}" alt="" class="ytb-thumb">
                        <h3>@field('video_nr'). @title</h3>
                    </a>
            @endwhile
        </div>
    </section>
   
@endsection
