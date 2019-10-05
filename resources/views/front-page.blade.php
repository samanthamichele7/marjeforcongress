@extends('layouts.homepage')

@section('content')
  @include('partials.page-header')

  <div class="flex flex-wrap">
    <div class="w-full md:w-1/2 bg-mfcDarkBlue flex items-center justify-center">
        <div class="h-64 flex items-center justify-center">
            <img src="@asset('images/logo-light.png')" alt="Marje for Congress logo" class="h-48 lg:h-64" />
        </div>
    </div>

    <div class="w-full md:w-1/2 slideshow h-96" data-slideshow>
        <img src="@asset('images/homepage/1.jpg')" class="h-96" />
        <img src="@asset('images/homepage/2.jpg')" class="h-96" />
        <img src="@asset('images/homepage/3.jpg')" class="h-96" />
        <img src="@asset('images/homepage/4.jpg')" class="h-96" />
        <img src="@asset('images/homepage/5.jpg')" class="h-96" />
        <img src="@asset('images/homepage/6.jpg')" class="h-96" />
        <img src="@asset('images/homepage/7.jpg')" class="h-96" />
    </div>
  </div>

  <div class="container flex flex-wrap mx-auto mt-16 px-8 lg:px-12">
    <div class="w-full lg:w-3/5">
        <div class="text-2xl text-mfcDarkBlue font-header italic font-bold mx-auto">Turning Up</div>

        <p>
            When you plant a seed, the first thing it does is put down roots, and the second thing it does is turn up toward the warmth of sunlight 
            to grow. But before you plant that seed, you must also turn up the soil, to break up entrenched roots and rocks to give that see a way 
            to break through to growth.
        </p>

        <p>
            I think it’s time to plant some new seeds in American government – seeds of progress, seeds of cooperation, seeds of hope, 
            seeds of positive change, and turn up the entrenched systems that make growth and progress difficult. I believe that by 
            turning up for change and planting these seeds, we can harvest a stronger and more secure future for our nation.
        </p>

        <div class="text-xl text-mfcDarkBlue font-header italic font-bold mx-auto mt-8 mb-4">What am I turning up for?</div>

        <ul class="mb-16">
            <li>
                Economic security in the form of livable wages, improvement in global trade negotiations that affect the price of steel, lumber, 
                and farm production, and exploring new opportunities for economic growth.
            </li>

            <li>
                Educational equality, so that students from rural areas have access to the same high quality educational opportunities as 
                students from more populous regions.
            </li>

            <li>
                Environmental awareness and impact planning. The natural resources of northern Minnesota deserve smart stewardship, 
                allowing for economic growth while protecting the quality of air and water we have come to expect.
            </li>

            <li>
                Affordable and accessible health care. Rural areas have been severely impacted by the high costs of prescription medication 
                and the effects of hospital system consolidation and closures.
            </li>

            <li>
                Rural broadband initiatives and infrastructure improvements that will allow for and anticipate future growth.
            </li>
        </ul>
    </div>

    <div class="w-full lg:w-2/5">
        <img src="@asset('images/homepage/marje.jpg')" alt="Marje photo" class="rounded-full p-8 mx-auto" />
    </div>
  </div>

  <div class="w-full h-96 bg-mfcLightBlue flex flex-col items-center justify-center text-center">
    <div class="text-2xl text-white font-header italic font-bold mx-auto mb-8">Plant a Seed</div>

    <p class="text-white mb-8 mx-16">Donate today to invest in each other and support Marje's campaign</p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="JSLJTC957PTCJ" />
        <button class="bg-mfcGreen hover:bg-green-600 text-white font-bold py-4 px-8 rounded" type="submit">Donate with PayPal</button>
        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
    </form>
  </div>
@endsection

