{{--
  Template Name: Family life
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    
    @include('partials.section-hero-sand-img')

    <section class="main-archive container flex flex-row items-start justify-between">
        
    </section>

    @include('partials.section-latest-video-sand')

  @endwhile
@endsection