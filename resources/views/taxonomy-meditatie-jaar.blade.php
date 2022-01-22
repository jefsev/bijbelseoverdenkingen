@extends('layouts.app')

@section('content')

@php
    $cur_term = get_queried_object()->name;
@endphp

    <section class="archive-header container flex flex-row items-center justify-start">
        <img src="@asset('images/tag-title.svg')" alt="">
        <h1>Meditaties <?php single_term_title(); ?></h1>
    </section>

    <section class="main-archive archive-archive container flex flex-row items-start justify-between">
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
          
            <div class="aside-filter">
                <h3>Meditaties</h3>
                @php 
                    $args = array(
                        'taxonomy' => 'meditatie-jaar',
                        'hide_empty' => false,
                        'order' => 'DESC'
                    );
                    $m_cats = get_terms($args);
                @endphp
                <div class="filter-loop flex flex-row justify-start flex-wrap">
                    @foreach($m_cats as $x)
                    @php
                        $term_link = get_term_link($x->term_id, 'meditatie-jaar');
                    @endphp
                        
                        <a href="{!! $term_link !!}" class="filter-btn @if($cur_term == $x->name) active @endif">{!! $x->name !!}</a>
                    @endforeach
                </div>
            </div>

            <div class="aside-subscribe">
                <h3>Blijf op de hoogte van:</h3>
                <p>De Bijbelse overdenkingen van Wilco</p>
                @shortcode('[email-subscribers-form id="2"]')
            </div>
            
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
