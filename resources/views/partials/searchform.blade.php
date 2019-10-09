<div class="w-full">
<form role="search" method="get" action="{{ esc_url( home_url( '/' ) ) }}">
  <div class="flex items-center justify-center mt-8">
    <label>
        <span class="screen-reader-text">{{ _x( 'Search for:', 'label' ) }}</span>
        <input type="search" class="bg-white focus:outline-none focus:shadow-outline border border-mfcDarkBlue py-2 px-4 block w-full appearance-none leading-normal" placeholder="{!! esc_attr_x( 'Search &hellip;', 'placeholder' ) !!}" value="{{ get_search_query() }}" name="s" />
    </label>

    <input type="submit" class="bg-transparent hover:bg-mfcDarkBlue text-mfcDarkBlue font-semibold hover:text-white py-2 px-4 border border-mfcDarkBlue hover:border-transparent" value="{{ esc_attr_x( 'Search', 'submit button' ) }}" />
  </div>
</form>
</div>
