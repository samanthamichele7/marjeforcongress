<!doctype html>
<html {!! get_language_attributes() !!} class="h-full">
  @include('partials.head')
  <body class="flex flex-col h-full" @php body_class() @endphp>
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
