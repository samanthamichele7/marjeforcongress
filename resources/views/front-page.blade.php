@extends('layouts.homepage')

@section('content')
  @include('partials.page-header')

  <div class="flex flex-wrap">
    <div class="w-full md:w-1/2">
        <div class="bg-mfcDarkBlue h-128 flex items-center justify-center">
            <img src="@asset('images/logo-light.png')" alt="Marje for Congress logo" class="h-36 sm:h-48 lg:h-64" />
        </div>
    </div>

    <div class="w-full md:w-1/2">
        <div class="slideshow h-128" data-slideshow>
            <img src="@asset('images/homepage/1.jpg')" class="h-96" />
            <img src="@asset('images/homepage/2.jpg')" class="h-96" />
            <img src="@asset('images/homepage/3.jpg')" class="h-96" />
            <img src="@asset('images/homepage/4.jpg')" class="h-96" />
            <img src="@asset('images/homepage/5.jpg')" class="h-96" />
            <img src="@asset('images/homepage/6.jpg')" class="h-96" />
            <img src="@asset('images/homepage/7.jpg')" class="h-96" />
        </div>
    </div>
  </div>

  <div class="container mx-auto my-16 px-8 lg:px-12">
    <div class="flex flex-wrap pb-8">
        <div class="w-full lg:w-3/5">
            <p>
                After a great deal of thought, I've come to the difficult decision to suspend my congressional campaign. In recent days, it has become evident that the time and resource demands of a congressional campaign and the requirements of my life as a working parent are not compatible. Though my reasons for running are public, and have not changed, the private needs of my family must take priority for a time. If I must choose between pursuing a seat in Congress or the people I love who depend on me - the obvious choice is people first.
            </p>

            <p>
                Though I feel disappointment at suspending my campaign so soon after it started, I know that this is not the end of my path in political activism. I remain convinced that we need voices that will speak out for the needs of working-class folks, advocate for affordable and accessible health care, and push for rural broadband to expand economic diversity and educational opportunity for all.
            </p>

            <p>
                We want to live in a nation where we can discuss challenging problems with kindness, civility and empathy for everyone affected by those problems. We want a nation that abides by the laws of Constitutional democracy. We want a nation where every citizen has a voice that is heard and recognized. The only way to achieve that nation is to continue to speak out when elected officials ignore the law and abuse their power. I will continue to speak out.
            </p>

            <p>
                Obviously, the 8th Congressional District has changed greatly in the past 50 years, but I think we can still be inspired by the leadership of Representatives like John Blatnik, James Oberstar and Rick Nolan who fought for the hard-working people of Minnesota and the nation. They weren't always "nice," as our current Congressman is labeled, but they were effective, influential and got the job done. They were scrappy. Their past work was an inspiration for me, and should be for the person who aspires to be our next Representative in Congress.
            </p>

            <p class="text-lg text-mfcDarkBlue italic font-bold pt-4">This is not the end of my journey. This is the beginning. And I'm scrappy.</p>
        </div>

        <div class="w-full lg:w-2/5 pt-8">
            <img src="@asset('images/homepage/marje.jpg')" alt="Marje photo" class="rounded-full p-4 md:p-8 mx-auto lg:-mr-8 mb-8" />
        </div>
    </div>
  </div>
@endsection

