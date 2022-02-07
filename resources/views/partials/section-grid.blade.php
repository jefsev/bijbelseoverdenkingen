@group('section_grid')
    <section class="container container-grid">
        <h2>@sub('titel')</h2>
        <div class="wrap-grid flex flex-row justify-between items-start flex-wrap">
            @fields('grid_blocks')
            <a href="@sub('link')" class="item">
                <div class="head flex flex-row justify-between items-center">
                    <h3>@sub('titel')</h3>
                    <img src="@sub('icon', 'url')" alt="@sub('icon', 'alt')">
                </div>
                <p>@sub('tekst')</p>
            </a>
            @endfields
        </div>
    </section>
@endgroup