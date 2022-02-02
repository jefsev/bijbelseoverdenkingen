@extends('layouts.app')

@section('content')

    <section class="archive-header container flex flex-row items-center justify-start">
        <img src="@asset('images/tag-title.svg')" alt="">
        <h1><?php post_type_archive_title(); ?></h1>
    </section>

    <section class="main-archive archive-archive container flex flex-row items-start justify-between">
        <div class="archive-loop flex flex-col">
            @while(have_posts()) @php the_post() @endphp
              
                <a href="@permalink" class="post-item">
                    <h2>@title</h2>
                    <div class="content-row flex flex-row">
                        <img src="@thumbnail('full',false)" alt="" class="ytb-thumb"/>
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
                                </div>
                            </div>
                            <p><?php echo wp_trim_words(get_the_content(), 29); ?></p>
                        </div>
                    </div>  
                </a>
            @endwhile
        </div>
        <aside class="archive-sidebar flex flex-col justify-start items-start">
          
            @include('partials.aside-sub-meditations')
            @include('partials.aside-latest-video')
            @include('partials.aside-ytb')

        </aside>
    </section>

   
@endsection