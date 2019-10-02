@extends('layouts.homepage')

@section('content')
  @include('partials.page-header')

  <div class="flex flex-wrap">
    <div class="w-full md:w-1/2 bg-mfcDarkBlue flex items-center justify-center">
        <img src="@asset('images/logo-light.png')" alt="Marje for Congress logo" class="h-64" />
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
@endsection

