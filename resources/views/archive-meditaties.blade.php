@extends('layouts.app')

@section('content')

    <section class="hero-blue-img flex flex-row">
        <div class="wrap-50 bg--blue flex flex-col items-start justify-center">
            <h1>Bijbelse overdenkingen</h1>
            <p>Bijbelse overdenkingen, meditaties geschreven rond een Bijbels onderwerp. Of u nu bekend met de Bijbel of niet, worstelt met verslavingen of vragen, deze overdenkingen zetten u stil en geven stof tot nadenken.</p>

            <p>Onderstaand treft u de overdenkingen die ik geplaatst heb vanaf het jaar 2012</p>
            <a href="#moreInfo" class="btn btn--white">Meer over
                <img src="@asset('images/arrow-black.svg')" alt="">
            </a>
        </div>
        <div class="wrap-50 wrap-img">
            <img src="/wp-content/uploads/2022/01/Sterke-wind-waarschuwing.png" alt="">
        </div>
    </section>

    <section class="main-archive container flex flex-row items-start justify-between">
        <div class="archive-loop flex flex-col">
            @while(have_posts()) @php the_post() @endphp
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
            @endwhile
        </div>
        <aside class="archive-sidebar flex flex-col justify-start items-start">
          
            @options('footer_1')
            <div class="aside-ytb">
                <h4>@sub('youtube_title')</h4>
                <div class="youtube-links flex flex-col">
                    @options('youtube_kanalen')
                    <a href="@sub('youtube_link')" class="flex flex-row items-center" target="_blank">
                        <img src="@asset('images/youtube-black.svg')" target="_blank" alt="">
                        <div class="content flex flex-col">
                            <span class="title">@sub('youtube_titel')</span>
                            <span class="subtitle">@sub('ondertitel')</span>
                        </div>
                    </a>
                    @endoptions
                </div>
            </div>
          @endoptions
        </aside>
    </section>

   
@endsection
