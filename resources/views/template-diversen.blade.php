{{--
  Template Name: Diversen
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    @layouts('flexible_elementen')
            @layout('hero_black_text')
                @include('partials.section-hero-black')
            @endlayout
            @layout('hero_quote_and_search')
                @include('partials.hero-quote-and-search')
            @endlayout
            @layout('section_double_cards')
                @include('partials.section-double-cards')
            @endlayout
            @layout('section_articles')
                @include('partials.section-articles')
            @endlayout
            @layout('section_articles')
                @include('partials.section-latest-video')
            @endlayout
            @layout('section_verse_centered')
                @include('partials.section-verse-centered')
            @endlayout
            @layout('section_grid')
                @include('partials.section-grid')
            @endlayout
            @layout('section_text')
                @include('partials.section-text')
            @endlayout
        @endlayouts

  @endwhile
@endsection