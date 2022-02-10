<header class="banner">
  <div class="wrap flex flex-row justify-between items-center">
    <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/logo.svg')" alt="">
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <div class="menu-icons flex flex-row items-center">
        <span class="toggle-menu">
            <img src="@asset('images/search.svg')" alt="">
        </span>

        <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {       
            $count = WC()->cart->cart_contents_count; 
        }?>

        <a href="/winkelmand/" class="cart">
            @if ($count > 0)
                <span id="amount"><?php echo esc_html( $count ); ?></span>
            @endif
            <img src="@asset('images/bag.svg')" alt="">
        </a>
        <span class="toggle-menu">
            <img src="@asset('images/menu.svg')" alt="">
        </span>
    </div>
  </div>
</header>

<div class="bg-overlay"></div>

<div id="popout-menu" class="popout-menu flex flex-col justify-between">
    <div class="head flex flex-row justify-between items-center"> 
        @include('partials.searchform')
        <img src="@asset('images/close.svg')" alt="" id="close" class="close">
    </div>
    <div class="content flex flex-col items-start justify-between">
        @options('mega_menu')
        <nav class="nav flex flex-col">
            @options('menu-items')
                <a href="@sub('link', 'url')">@sub('link', 'title')</a>
            @endoptions
        </nav>
        @endoptions
    </div>

    <div class="foot flex flex-col items-start justify-between">
        <div class="menu-lang flex flex-row items-center">
            <span>Translate: </span>@shortcode('[gtranslate]')
        </div>

        @options('footer_1')
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
        @endoptions
    </div>
</div>
