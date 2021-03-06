<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header', 'shop') @endphp
    @include('partials.header')
    <div class="container-content" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer', 'shop') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
