<!doctype html>
<html {!! get_language_attributes() !!} class="h-full">
  @include('partials.head')
  <body class="flex flex-col h-full" @php body_class() @endphp>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
    
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="flex-1 wrap container mx-auto mb-16 px-8" role="document">
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
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
