<article @php post_class('flex flex-wrap items-center mb-8') @endphp>
  <div class="w-full md:w-1/4">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <?php the_post_thumbnail('medium', ['class' => 'flex items-center mx-auto']); ?>
    </a> 
  </div>    
  <div class="w-full md:w-3/4 md:pl-8">
    <header>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      @include('partials/entry-meta')
    </header>
    <div class="entry-summary">
        <div>@php the_excerpt() @endphp</div>
    </div>
  </div>
</article>
