// import external dependencies
import 'jquery'

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router'
import common from './routes/common'
import home from './routes/home'
import aboutUs from './routes/about'

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
})

// Slideshow
class Slideshow {
  constructor() {
    this.initSlides();
    this.initSlideshow();
  }

  initSlides() {
    this.container = $('[data-slideshow]');
    this.slides = this.container.find('img');
    this.slides.each((idx, slide) => $(slide).attr('data-slide', idx));
  }

  initSlideshow() {
    this.imagesLoaded = 0;
    this.currentIndex = 0;
    this.setNextSlide();
    this.slides.each((idx, slide) => {
      $('<img>').on('load', $.proxy(this.loadImage, this)).attr('src', $(slide).attr('src'));
    });
  }

  loadImage() {
    this.imagesLoaded++;
    if (this.imagesLoaded >= this.slides.length) { this.playSlideshow() }
  }

  setNextSlide() {
    this.nextSlide = this.container.find(`[data-slide="${this.currentIndex}"]`).first();
    this.nextSlide.addClass('next');
  }

  playSlideshow() {
    this.slideshow = window.setInterval(() => { this.performSlide() }, 3500);
  }

  performSlide() {
    if (this.prevSlide) { this.prevSlide.removeClass('prev fade-out') }

    this.nextSlide.removeClass('next');
    this.prevSlide = this.nextSlide;
    this.prevSlide.addClass('prev');

    this.currentIndex++;
    if (this.currentIndex >= this.slides.length) { this.currentIndex = 0 }

    this.setNextSlide();

    this.prevSlide.addClass('fade-out');
  }
}

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents()
  new Slideshow()
});

jQuery(document).ready(function() {});
