@group('section_text_img')
    <section class="text-img container flex flex-row">
        <div class="wrap-50 text-side flex flex-col justify-center">
            @sub('text_left')
        </div>
        <div class="wrap-50 img-side">
            <img src="@sub('img_right', 'url')" alt="@sub('img_right', 'alt')">
        </div>
    </section>
@endgroup