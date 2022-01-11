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
        <a href="/winkelmand/">
            <img src="@asset('images/bag.svg')" alt="">
        </a>
        <span class="toggle-menu">
            <img src="@asset('images/menu.svg')" alt="">
        </span>
    </div>
  </div>
</header>
