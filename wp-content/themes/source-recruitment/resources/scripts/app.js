import domReady from '@roots/sage/client/dom-ready';
import Splide from '@splidejs/splide';
import '@splidejs/splide/dist/css/splide.min.css'; // Ensure this is included

domReady(() => {
  // Initialize Splide for #image-carousel
  const imageCarousel = document.querySelector('#image-carousel');
  if (imageCarousel) {
    new Splide(imageCarousel, {
      type: 'loop',
      perPage: 1, // Display one image at a time
      height: '100%',
      direction: 'ttb', // Vertical direction
      autoplay: true, // Enable automatic slide looping
      interval: 3000, // Time interval for auto slides (3 seconds)
      pauseOnHover: true, // Pause when hovered
      pagination: true, // Use dots for navigation
      arrows: false, // Remove arrows
      wheel: true, // Allow scrolling with the mouse wheel
    }).mount();
  }
});
