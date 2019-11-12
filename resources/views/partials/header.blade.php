<nav class="flex items-center justify-between flex-wrap">
  <!-- Desktop -->
  <div class="hidden lg:flex items-center justify-between mx-auto container py-4">
    <a class="text-sm md:text-base" href="/bio">Bio</a>
    <a class="text-sm md:text-base" href="/events">Events</a>
    <a href="/"><img src="@asset('images/logo-dark.png')" class="h-16" /></a>
    <a class="text-sm md:text-base" href="/issues">Issues</a>
    <a class="text-sm md:text-base" href="/news">News</a>
  </div>

  <!-- Mobile -->
  <div class="flex items-center flex-shrink-0 text-white mr-6 lg:hidden mt-2">
    <a href="/"><img src="@asset('images/logo-dark.png')" class="h-16" /></a>
  </div>
  <div class="block lg:hidden mr-8">
    <button onclick="document.getElementById('nav-menu').classList.toggle('hidden');" class="flex items-center px-3 py-2 border rounded text-mfcDarkBlue border-mfcLightBlue hover:text-mfcLightBlue hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow hidden lg:hidden mx-4 pb-8" id="nav-menu">
    <div class="text-sm">
      <a href="/bio" class="block mt-4 lg:inline-block text-mfcDarkBlue hover:text-mfcLightBlue mr-4">
        Bio
      </a>
      <a href="https://www.brightest.io/cause/marjeforcongress" class="block mt-4 lg:inline-block text-mfcDarkBlue hover:text-mfcLightBlue mr-4" target="__blank">
        Get Involved
      </a>
      <a href="/issues" class="block mt-4 lg:inline-block text-mfcDarkBlue hover:text-mfcLightBlue">
        Issues
      </a>
      <a href="/news" class="block mt-4 lg:inline-block text-mfcDarkBlue hover:text-mfcLightBlue">
        News
      </a>
    </div>
  </div>
</nav>
