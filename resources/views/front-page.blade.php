@extends('layouts.homepage')

@section('content')
  @include('partials.page-header')

  <div class="flex flex-wrap">
    <div class="w-full md:w-1/2 bg-mfcDarkBlue flex items-center justify-center">
        <div class="h-64 flex items-center justify-center">
            <img src="@asset('images/logo-light.png')" alt="Marje for Congress logo" class="h-36 sm:h-48 lg:h-64" />
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

  <div class="container mx-auto my-16 px-8 lg:px-12">
    <div class="flex flex-wrap border-b border-gray-400 pb-8">
        <div class="w-full lg:w-3/5">
            <div class="text-2xl text-mfcDarkBlue font-header italic font-bold mx-auto">People First</div>

            <p>
                In the course of my lifetime, I’ve observed that American government has shifted to promote and protect 
                big money, big banks, and big business. It seems to me that policy and politics are driven by 
                “profit first, people second.”
            </p>

            <p>
                I disagree with that direction for America. I believe — as Abraham Lincoln said — in <i>“government of the people, 
                by the people, for the people.”</i> I’m running because I want a government that puts people first. 
            </p>


            <p class="ml-4 mt-8">
                <span class="text-mfcDarkBlue italic font-bold">People First</span> means strong labor laws and unions to protect 
                all who work, with livable wages that support a family on 40 hours of work.
            </p>

            <p class="ml-4">
                <span class="text-mfcDarkBlue italic font-bold">People First</span> means all citizens have access to 
                affordable health care and prescription medication, and do not face bankruptcy in order to survive.
            </p>

            <p class="ml-4">
                <span class="text-mfcDarkBlue italic font-bold">People First</span> means we look for ways to expand 
                economic opportunities through rural broadband initiatives and educational partnerships to bring 
                world class education to our small towns and communities.
            </p>

            <p class="ml-4">
                <span class="text-mfcDarkBlue italic font-bold">People First</span> means we protect our democratic freedoms and every eligible vote counts.
            </p>

            <p class="text-lg text-mfcLightBlue italic font-bold mt-8 -mr-8">
                People First — because we deserve a government that works for us.
            </p>
        </div>

        <div class="w-full lg:w-2/5 pt-8">
            <img src="@asset('images/homepage/marje.jpg')" alt="Marje photo" class="rounded-full p-4 md:p-8 mx-auto lg:-mr-8 mb-8" />
        </div>
    </div>
  </div>

  <div style="background: linear-gradient(180deg, white, rgba(141, 198, 63, 0.2), rgba(141, 198, 63, 0.5));">
    <div class="container mx-auto pb-16 px-8 lg:px-12">
        <div class="flex flex-wrap items-center lg:pb-8">
            <div class="w-full lg:w-1/2 xl:w-1/3 mb-8 lg:mb-0 lg:pr-16">
                <img src="@asset('images/homepage/cd8.png')" alt="MN CD8" class="h-128 h-auto w-64 md:w-128 mx-auto shadow" />
            </div>

            <div class="w-full lg:w-1/2 xl:w-2/3 mb-8 lg:mb-0">
                <p class="text-gray-600 text-xl">
                    I grew up on Minnesota’s Iron Range, a descendent of Finnish immigrant farmers and miners. I myself 
                    spent a summer working in the fines crusher at Minntac — that third shift job paid for a year of college. 
                    Coming from a family with five children, money was always tight, but love was always abundant. 
                    I know that my dad’s job as a union steelworker and the government assistance we qualified for was one 
                    of the reasons we had enough during lean years for American steel.   
                </p>
            </div>
        </div>
        
        <p class="text-lg text-mfcDarkBlue italic font-bold pt-4">
            Why I want to serve CD8 in Congress
        </p>

        <p>
            My story is the story of all immigrant families, who start with the hope of a better future for 
            their children and work hard to make it reality.
        </p>

        <p>
            I announced my campaign because I can’t stand politics.
        </p>

        <p>
            We are living in an era where kindness, civility, concern, and obvious compassion for our neighbors 
            is absent from the national political conversation. 
        </p>

        <p>
            We are living in an era where programs that have direct impact on the well-being of our most at-risk 
            citizens are losing funding and meaningful change is nearly impossible because politicians deny 
            that they have control over these policy choices.
        </p>

        <p>
            We are living in an era with some of the greatest economic disparity in history because shareholders 
            are placed at a higher value than the workers who create the products being sold. Economic prosperity 
            is not easily accessible if you weren’t already born into economic prosperity. 
        </p>

        <p class="font-bold">
            I’m running because I can’t stand politics, and if I don’t stand up and use the skills and talents given to 
            me to try to change that, the future that I will leave to my own children will be worse than the one granted to me. 
        </p>
    </div>
  </div>

  <div class="w-full bg-mfcLightBlue flex flex-col items-center justify-center text-center py-8">
    <div class="text-lg md:text-2xl text-white font-header italic font-bold mx-auto pb-2">Let's work together to put People First.</div>

    <p class="text-white mb-4 mx-8 md:mx-16">Donate via Act Blue</p>

    <div class="flex justify-between mb-4 border-b border-gray-300 pb-4">
        <a class="bg-white hover:bg-gray-200 border border-gray-500 text-mfcDarkBlue font-bold mx-1 md:mx-2 py-2 px-2 rounded text-xs sm:text-sm" href="https://secure.actblue.com/donate/marje?amount=5">$5</a>
        <a class="bg-white hover:bg-gray-200 border border-gray-500 text-mfcDarkBlue font-bold mx-1 md:mx-2 py-2 px-2 rounded text-xs sm:text-sm" href="https://secure.actblue.com/donate/marje?amount=10">$10</a>
        <a class="bg-white hover:bg-gray-200 border border-gray-500 text-mfcDarkBlue font-bold mx-1 md:mx-2 py-2 px-2 rounded text-xs sm:text-sm" href="https://secure.actblue.com/donate/marje?amount=25">$25</a>
        <a class="bg-white hover:bg-gray-200 border border-gray-500 text-mfcDarkBlue font-bold mx-1 md:mx-2 py-2 px-2 rounded text-xs sm:text-sm" href="https://secure.actblue.com/donate/marje?amount=50">$50</a>
        <a class="bg-white hover:bg-gray-200 border border-gray-500 text-mfcDarkBlue font-bold mx-1 md:mx-2 py-2 px-2 rounded text-xs sm:text-sm" href="https://secure.actblue.com/donate/marje?amount=100">$100</a>
        <a class="bg-white hover:bg-gray-200 border border-gray-500 text-mfcDarkBlue font-bold mx-1 md:mx-2 py-2 px-2 rounded text-xs sm:text-sm" href="https://secure.actblue.com/donate/marje">$Other</a>
    </div>

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_a_id" value="JSLJTC957PTCJ" />
        <button class="bg-mfcGreen hover:bg-green-600 text-white mx-2 py-2 px-4 rounded" type="submit">Donate via PayPal</button>
        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
    </form>
  </div>
@endsection

