const slides = [
  {
    image: "media/img/NikeAirJordan1SpiderMan/1.png",
  },
  {
    image: "media/img/NikeAirJordan1SpiderMan/2.png",
  },
  {
    image: "media/img/NikeAirJordan1SpiderMan/3.png",
  },
  {
    image: "media/img/NikeAirJordan1SpiderMan/4.png",
  },
];

let currentSlide = 0;
let isAnimating = false;

function updateSlide() {
  const image = document.getElementById("slider-image");

  image.classList.add("fade-out");

  setTimeout(() => {
    image.src = slides[currentSlide].image;

    image.classList.remove("fade-out");
    image.classList.add("fade-in");

    setTimeout(() => {
      image.classList.remove("fade-in");
      isAnimating = false;
    }, 300);
  }, 300);
}

function prevSlide() {
  if (isAnimating) return;
  isAnimating = true;
  currentSlide = currentSlide === 0 ? slides.length - 1 : currentSlide - 1;
  updateSlide();
}

function nextSlide() {
  if (isAnimating) return;
  isAnimating = true;
  currentSlide = currentSlide === slides.length - 1 ? 0 : currentSlide + 1;
  updateSlide();
}
