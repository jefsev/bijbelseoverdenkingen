@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
   @include('partials.hero-quote-and-search')
  @endwhile
@endsection