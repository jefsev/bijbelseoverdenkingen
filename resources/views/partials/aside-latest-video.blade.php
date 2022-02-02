@php
$queryLv = new WP_Query([
    'post_type' => 'videos',
    'posts_per_page' => 1
]);
@endphp

<div class="aside-latest-video">
    <h3>Laatste video:</h3>
    @posts($queryLv)
    <div class="embed-container">
        @field('youtube_field')
    </div>
    @endposts
</div>