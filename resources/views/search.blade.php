@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="text-xl text-mfcDarkBlue text-center w-full font-header italic font-bold ml-3 mt-8">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}

    <img src="@asset('images/not-found.png')" alt="Not found image" class="mx-auto h-auto w:64 md:w-128" />
  @endif

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
