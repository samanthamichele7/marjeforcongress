@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="text-xl text-mfcDarkBlue text-center w-full font-header italic font-bold ml-3 mt-8">
      {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}

    <img src="@asset('images/not-found.png')" alt="Not found image" class="mx-auto h-auto w:64 md:w-128" />
  @endif
@endsection
