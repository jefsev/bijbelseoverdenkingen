@group('section_double_cards')
    <section class="double-cards container">
        <div class="wrap flex flex-row justify-between">
            @group('card_left')
            <div class="wrap-50 card--blue">
                <img src="@sub('featured_img','url')" alt="@sub('featured_img','alt')">
                <div class="card-content flex flex-col items-start">
                    <h2>@sub('title')</h2>
                    <p>@sub('text')</p>
                    <a href="@sub('button','url')" class="btn btn--white">@sub('button','title')
                        <img src="@asset('images/arrow-black.svg')" alt="">
                    </a>
                </div>
            </div>
            @endgroup
            @group('card_right')
            <div class="wrap-50 card--sand">
                <img src="@sub('featured_img','url')" alt="@sub('featured_img','alt')">
                <div class="card-content flex flex-col items-start">
                    <h2>@sub('title')</h2>
                    <p>@sub('text')</p>
                    <a href="@sub('button','url')" class="btn btn--black">@sub('button','title')
                        <img src="@asset('images/arrow-white.svg')" alt="">
                    </a>
                </div>
            </div>
            @endgroup
        </div>
    </section>
@endgroup