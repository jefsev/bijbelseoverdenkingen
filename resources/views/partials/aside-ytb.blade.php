@options('footer_1')
<div class="aside-ytb">
    <h4>@sub('youtube_title')</h4>
    <div class="youtube-links flex flex-col">
        @options('youtube_kanalen')
        <a href="@sub('youtube_link')" class="flex flex-row items-center" target="_blank">
            <img src="@asset('images/youtube-black.svg')" target="_blank" alt="">
            <div class="content flex flex-col">
                <span class="title">@sub('youtube_titel')</span>
                <span class="subtitle">@sub('ondertitel')</span>
            </div>
        </a>
        @endoptions
    </div>
</div>
@endoptions