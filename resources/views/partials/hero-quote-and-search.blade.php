@group('hero_quote_and_search')
<section class="hero-quote-and-search">
    <div class="container flex flex-row justify-between items-center">
        @group('qoute_block')
        <div class="wrap-50">
            <div class="quote-block flex flex-col">
                <span class="verse-n">@sub('verse_number')</span>
                <span class="verse-verse">
                    @sub('verse')
                </span>
            </div>
            <div class="extra-text">
                @sub('extra_text')
            </div>
        </div>
        @endgroup
        @group('search_block')
        <div class="wrap-50">
            <div class="search-and-contact-block flex flex-col items-end">
                <div class="function-block first flex flex-row justify-start items-start toggle-menu">
                    <img src="@asset('images/search.svg')" alt="">
                    <div class="text flex flex-col">
                        <h4>@sub('search_title')</h4>
                        <p>@sub('search_subtitle')</p>
                    </div>
                </div>
                <a href="/contact/" class="function-block flex flex-row justify-start items-start">
                    <img src="@asset('images/mail.svg')" alt="">
                    <div class="text flex flex-col">
                        <h4>@sub('contact_title')</h4>
                        <p>@sub('contact_subtitle')</p>
                    </div>
                </a>
            </div>
        </div>
        @endgroup
    </div>
</section>
@endgroup