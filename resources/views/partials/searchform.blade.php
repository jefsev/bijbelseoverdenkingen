<form role="search" method="get" class="search-form" action="{{ esc_url( home_url( '/' ) ) }}">
    <input type="search" class="search-field" placeholder="{!! esc_attr_x( 'Type hier uw zoekopdracht', 'placeholder' ) !!}" value="{{ get_search_query() }}" name="s" />
  <button type="submit" class="search-submit">
    <img src="@asset('images/search.svg')" alt="">
  </button>
</form>