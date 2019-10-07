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
                “Profit first, people second.”
            </p>

            <p>
                I disagree with that direction for America. I believe — as Abraham Lincoln said — in “Government of the people, 
                by the people, for the people.” I’m running because I want a government that puts people first. 
            </p>


            <p>
                <span class="text-mfcDarkBlue italic font-bold">People First</span> means strong labor laws and unions to protect 
                all who work, with livable wages that support a family on 40 hours of work.
            </p>

            <p>
                <span class="text-mfcDarkBlue italic font-bold">People First</span> means all citizens have access to 
                affordable health care and prescription medication, and do not face bankruptcy in order to survive.
            </p>

            <p>
                <span class="text-mfcDarkBlue italic font-bold">People First</span> means we look for ways to expand 
                economic opportunities through rural broadband initiatives and educational partnerships to bring 
                world class education to our small towns and communities.
            </p>

            <p>
                <span class="text-mfcDarkBlue italic font-bold">People First</span> means we protect our democratic freedoms and every eligible vote counts.
            </p>

            <p class="text-lg text-mfcDarkBlue italic font-bold">
                People First — because we deserve a government that works for the people.
            </p>
        </div>

        <div class="w-full lg:w-2/5 pt-8">
            <img src="@asset('images/homepage/marje.jpg')" alt="Marje photo" class="rounded-full p-4 md:p-8 mx-auto lg:-mr-8 mb-8" />
        </div>
    </div>

    <div class="pt-8 flex flex-wrap items-center">
        <div class="w-full lg:w-1/2 xl:w-1/3">
            <img src="@asset('images/homepage/cd8.png')" alt="MN CD8" class="lg:pr-16 h-128 h-auto w-64 md:w-128 mx-auto" />
        </div>

        <div class="w-full lg:w-1/2 xl:w-2/3">
            <p class="text-gray-600">
                I grew up on Minnesota’s Iron Range, a descendent of Finnish immigrant farmers and miners. I myself 
                spent a summer working in the fines crusher at Minntac — that third shift job paid for a year of college. 
                Coming from a family with five children, money was always tight, but love was always abundant. 
                I know that my dad’s job as a union steelworker and the government assistance we qualified for was one 
                of the reasons we had enough during lean years for American steel.   
            </p>

            <p class="text-gray-600">
                When I went to college, I was fortunate to have help in the form of Pell Grants, local scholarships, 
                and teachers who encouraged me to push myself. When I graduated, I was recruited by a Fortune 500 
                technology firm and earned enough to pay off my student loans within 3 years of graduating. What I wasn’t 
                able to find, however, was a job that would bring me home again. 
            </p>
        </div>
    </div>


    <div>
        <p class="text-lg text-mfcDarkBlue italic font-bold pt-4">
            What does that have to do with running for Congress?
        </p>

        <p class="text-gray-600">
            The 8th district is the home of my heart. There is so much potential for great things in Northern 
            Minnesota. The challenges are not impossible, and they come back to the values I learned in 
            my childhood — work hard and help your neighbor. I want to keep worker’s rights strong so that we 
            don’t lose ground on wages and safe work environments in dangerous conditions. I want to see affordable 
            and accessible health care become a reality so that no one loses their home in order to stay alive. 
            I want to work hard and help my neighbors in the home of my heart.  
        </p>
    </div>
  </div>

  <div class="w-full bg-mfcLightBlue flex flex-col items-center justify-center text-center py-8">
    <div class="text-2xl text-white font-header italic font-bold mx-auto mb-4">Plant a Seed</div>

    <p class="text-white mb-8 mx-16">Donate today to invest in each other and support Marje's campaign</p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="JSLJTC957PTCJ" />
        <button class="bg-mfcGreen hover:bg-green-600 text-white font-bold py-4 px-8 rounded" type="submit">Donate with PayPal</button>
        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
    </form>
  </div>
@endsection

