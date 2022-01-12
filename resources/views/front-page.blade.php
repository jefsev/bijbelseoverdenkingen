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
    @endlayouts
  @endwhile
@endsection