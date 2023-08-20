let slideIndex = 0; // Start from 0 for automatic slideshow

function changeSlide(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  const slides = document.getElementsByClassName("slide");

  if (n >= slides.length) {
    slideIndex = 0; // Reset to first slide after reaching the end
  } else if (n < 0) {
    slideIndex = slides.length - 1; // Go to the last slide when moving backwards from the first slide
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex].style.display = "block";
  slideIndex++;

  // Set a timeout to call the function again after 3 seconds
  setTimeout(showSlides, 5000);
}

// Initialize the slideshow
showSlides(slideIndex);
