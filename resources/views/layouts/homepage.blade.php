<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>

    @php do_action('get_header') @endphp
    @include('partials.header')
    <div role="document">
        @yield('content')
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
