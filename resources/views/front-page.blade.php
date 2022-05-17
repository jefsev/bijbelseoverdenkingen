@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
    @layouts('flexible_elementen')
        @layout('hero_quote_and_search')
            @include('partials.hero-quote-and-search')
        @endlayout
        @layout('section_double_cards')
            @include('partials.section-double-cards')
        @endlayout
        @layout('section_articles')
            @include('partials.section-articles')
        @endlayout
        @layout('section_latest_video')
            @include('partials.section-latest-video')
        @endlayout
        @layout('section_verse_centered')
            @include('partials.section-verse-centered')
        @endlayout
    @endlayouts
  @endwhile
@endsection