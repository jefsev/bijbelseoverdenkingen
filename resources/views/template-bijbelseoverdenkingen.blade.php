{{--
  Template Name: Bijbelse overdenkingen
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    
    @include('partials.section-hero-blue-img')

    <section class="main-archive container flex flex-row items-start justify-between">
        <div class="archive-loop flex flex-col">
            @query([
                'post_type' => 'meditaties',
                'posts_per_page' => 3,
            ])

            @posts
            @php
                $video_url = get_field('oembed_field', FALSE, FALSE); //URL
                $video_thumb_url = App\get_video_thumbnail_uri($video_url); //get THumbnail via our functions 
            @endphp
                <a href="@permalink" class="post-item">
                    <h2>@title</h2>
                    <div class="content-row flex flex-row">
                        <img src="{{$video_thumb_url}}" alt="" class="ytb-thumb">
                        <div class="content-content flex flex-col">
                            <div class="meta-data flex flex-row justify-between items-center">
                                <div class="meta-left flex flex-row justify-start items-center">
                                    <div class="date">
                                        <span>@published('j-m-Y')</span>
                                    </div>
                                    <span class="sep">|</span>
                                    <div class="read-time flex flex-row justify-start items-center">
                                        <img src="@asset('images/time.svg')" alt="">
                                        @shortcode('[read_meter]')
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
                            <p><?php echo wp_trim_words(get_field('artikel'), 29); ?></p>
                        </div>
                    </div>  
                </a>
            @endposts
        </div>
        <aside class="archive-sidebar flex flex-col justify-start items-start">

            @include('partials.aside-filter')
            @include('partials.aside-sub-meditations')
            @include('partials.aside-ytb')
            
        </aside>
    </section>

    @include('partials.section-duo-text')

  @endwhile
@endsection
