const sliderImages = document.querySelector('.slider-images');
const prevSlideBtn = document.querySelector('.prev-slide');
const nextSlideBtn = document.querySelector('.next-slide');
let currentSlide = 0;

// Move slider to the next slide
function nextSlide() {
  if (currentSlide < 2) {
    currentSlide++;
    sliderImages.style.transform = `translateX(-${currentSlide * 100}%)`;
  }
}

// Move slider to the previous slide
function prevSlide() {
  if (currentSlide > 0) {
    currentSlide--;
    sliderImages.style.transform = `translateX(-${currentSlide * 100}%)`;
  }
}

// Add event listeners to slide buttons
nextSlideBtn.addEventListener('click', nextSlide);
prevSlideBtn.addEventListener('click', prevSlide);