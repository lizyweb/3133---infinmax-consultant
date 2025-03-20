document.addEventListener('DOMContentLoaded', () => {
    "use strict";
  
    
 // Hero Header carousel with fade in effect
$(".header-carousel").owlCarousel({
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',  // Added fadeIn effect
  items: 1,
  autoplay: true,
  smartSpeed: 1000, // Speed of the transition
  dots: false,
  loop: true,
  nav: true,
  navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>'
  ],
});


});
  
    
