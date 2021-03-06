<footer class="content-info">
  <div class="container flex flex-row items-start">
      @options('footer_1')
        <div class="footer-col">
            <a href="/" class="footer-logo">
                <img src="@sub('logo', 'url')" alt="@sub('logo', 'alt')">
            </a>
            <h4>@sub('youtube_title')</h4>
            <div class="youtube-links flex flex-col">
                @options('youtube_kanalen')
                <a href="@sub('youtube_link')" class="flex flex-row items-center" target="_blank">
                    <img src="@asset('images/youtube-white.svg')" target="_blank" alt="">
                    <div class="content flex flex-col">
                        <span class="title">@sub('youtube_titel')</span>
                        <span class="subtitle">@sub('ondertitel')</span>
                    </div>
                </a>
                @endoptions
            </div>
        </div>
      @endoptions
      @options('footer_2')
        <div class="footer-col flex flex-col items-start">
            <h3>@sub('title')</h3>
            <div class="footer-menu">
                @options('menu_links')
                    <a href="@sub('menu_link', 'url')">@sub('menu_link', 'title')</a>
                @endoptions
            </div>
            <a href="@sub('button_steun','url')" class="btn btn--white">
                @sub('button_steun','title')
                <img src="@asset('images/euro-sign.svg')" alt="">
            </a>
        </div>
      @endoptions
      @options('footer_3')
        <div class="footer-col">
            <h3>@sub('title')</h3>
            <p>@sub('text')</p>
            @shortcode('[email-subscribers-form id="1"]')
        </div>
      @endoptions
  </div>
  <div class="container footer-foot flex flex-col items-start">
    <div class="footer-lang flex flex-row items-center">
        <span>Translate: </span>@shortcode('[gtranslate]')
    </div>
    <div class="footer-small flex flex-row justify-between">
        <div class="footer-left">
            <span>© 2021 Bijbelse Overdenkingen | 0% cookie policy</span>
        </div>
        <div class="footer-right">
            <a href="https://techsev.nl/" target="_blank">Website by <span>Techsev.</span></a>
        </div>
    </div>
  </div>
</footer>
