// script.js
let slideIndex = 1;

function changeSlide(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  const slides = document.getElementsByClassName("slide");

  if (n > slides.length) {
    slideIndex = 1;
  } else if (n < 1) {
    slideIndex = slides.length;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
}

// Initialize the slideshow
showSlides(slideIndex);
