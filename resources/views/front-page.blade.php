@extends('layouts.homepage')

@section('content')
  @include('partials.page-header')

  <div class="flex flex-wrap">
    <div class="w-full md:w-1/2 bg-mfcDarkBlue flex items-center justify-center">
        <div class="h-64 flex items-center justify-center">
            <img src="@asset('images/logo-light.png')" alt="Marje for Congress logo" class="h-24 md:h-32 lg:h-48" />
        </div>
    </div>

    <div class="w-full md:w-1/2">
        <div class="h-128 bg-center bg-cover flex items-end" style="background-image: url(@asset('images/home-bg.jpg'))">
            <div class="text-2xl text-white font-header italic font-bold mx-auto mb-32">Turn Up For Change</div>
        </div>
    </div>
  </div>

  <div class="container mx-auto mt-16 px-4 md:px-8">
    @while(have_posts()) @php the_post() @endphp
        @include('partials.content-page-'.get_post_type())
    @endwhile
  </div>

  <div class="w-full h-128 bg-mfcLightBlue flex flex-col items-center justify-center">
    <div class="text-2xl text-white font-header italic font-bold mx-auto mb-8">Plant a Seed</div>

    <p class="text-white mb-8">Donate today to invest in each other and support Marje's campaign</p>
    <div class="text-center">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick" />
            <input type="hidden" name="hosted_button_id" value="JSLJTC957PTCJ" />
            <button class="bg-mfcGreen hover:bg-green-600 text-white font-bold py-4 px-8 rounded" type="submit">Donate with PayPal</button>
            <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
        </form>
    </div>
  </div>
@endsection

