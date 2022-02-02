{{--
  Template Name: Family life
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    
    @include('partials.section-hero-sand-img')

    <section class="main-archive-blog container flex flex-col items-start justify-start">
        <h2>Blogs</h2>

        @php
            $query_fe = new WP_Query([
                'post_type' => 'blog',
                'posts_per_page' => 1,
            ]);

            $firstBlog;
        @endphp

        <div class="blog-latest">
            @posts($query_fe)
                @php
                    $firstBlog = get_the_ID();
                @endphp
                <a href="@permalink" class="featured-item flex flex-row justify-between items-center">
                    <div class="thumbnail wrap-50">
                        @thumbnail('full')
                    </div>
                    <div class="content wrap-50">
                        <h3>@title</h3>
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
                        <p><?php echo wp_trim_words(get_the_content(), 49); ?></p>

                        <span class="btn btn--blue">Lees meer
                            <img src="@asset('images/arrow-white.svg')" alt="">
                        </span>
                    </div>
                </a>
            @endposts
        </div>

        <div class="blogs flex flex-row flex-wrap justify-between">
            @php
                $query_more = new WP_Query([
                    'post_type' => 'blog',
                    'posts_per_page' => 7,
                    'post__not_in' => array($firstBlog),
                ]);
            @endphp

            @posts($query_more)
                <a href="@permalink" class="blog-item wrap-50">
                    <h3>@title</h3>
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
                    <div class="content-part">
                        <p><?php echo wp_trim_words(get_the_content(), 9); ?></p>
                    </div>
                </a>
            @endposts
        </div>

        <div class="btn-row flex flex-row justify-center">
            <a href="/blogs/" class="btn btn--black">Meer blogs
                <img src="@asset('images/arrow-white.svg')" alt="">
            </a>
        </div>
    </section>

    @include('partials.section-latest-video-sand')

  @endwhile
@endsection