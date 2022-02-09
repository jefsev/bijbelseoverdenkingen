@group('section_img_text')
    <section class="img-text container flex flex-row">
        <div class="wrap-50 img-side">
            <img src="@sub('img_left', 'url')" alt="@sub('img_left', 'alt')">
        </div>
        <div class="wrap-50 text-side flex flex-col justify-center">
            @sub('text_right')
        </div>
    </section>
@endgroup