@php
$queryVideosNature = new WP_Query([
    'post_type' => 'videos-nature',
    'posts_per_page' => -1,
]);

$countxx = 0;
@endphp

<section class="container container-all-videos">
<h2>Nature from above videos</h2>        

<div class="row-videos flex flex-row flex-wrap justify-between">
    @posts($queryVideosNature)
    @if($countxx != 0)
        @php
            $video_url = get_field('youtube_field', FALSE, FALSE); //URL
            $video_thumb_url = App\get_video_thumbnail_uri($video_url); //get THumbnail via our functions 
        @endphp
            <a href="@permalink" class="item-video">
                <img src="{{$video_thumb_url}}" alt="" class="ytb-thumb">
                <h3>@field('video_nr'). @title</h3>
            </a>    
        @endif
        @php
                $countxx++; 
            @endphp
    @endposts
</div>
</section>