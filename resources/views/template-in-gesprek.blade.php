{{--
  Template Name: In gesprek
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    
    @include('partials.section-hero-blue-img')

    <section class="main-archive container flex flex-row items-start justify-between">
        <div class="archive-loop flex flex-col">
            @query([
                'post_type' => 'in-gesprek',
                'posts_per_page' => 3,
            ])

            @posts
                <a href="@permalink" class="post-item">
                    <h2>@title</h2>
                    <div class="content-row flex flex-row">
                        <img src="@thumbnail('full',false)" alt="" class="ytb-thumb"  style="max-height: 150px;" />
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
            @endposts
        </div>
        <aside class="archive-sidebar flex flex-col justify-start items-start">

            @include('partials.aside-ytb')
            
        </aside>
        
    </section>

    <div class="btn-row flex flex-row justify-center">
        <a href="/in-gesprek/" class="btn btn--black">Meer artikelen
            <img src="@asset('images/arrow-white.svg')" alt="">
        </a>
    </div>

    @include('partials.section-duo-text')

  @endwhile
@endsection
