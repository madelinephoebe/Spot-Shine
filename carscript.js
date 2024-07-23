//const carousel = document.querySelector('#testimonial-carousel');
//carousel.addEventListener('slide.bs.carousel', function (event) {
  // Do something when the carousel slide changes
//});

const buttons  = document.querySelector("[data-carousel-button]")

document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll("[data-carousel-button]");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      const offset = button.dataset.carouselButton === "next" ? 1 : -1;
      const slides = button.closest("[data-carousel]").querySelector('[data-slides]');

      const activeSlide = slides.querySelector("[data-active]");
      let newIndex = [...slides.children].indexOf(activeSlide) + offset;

      if (newIndex < 0) newIndex = slides.children.length - 1;
      if (newIndex >= slides.children.length) newIndex = 0;

      slides.children[newIndex].dataset.active = true;
      delete activeSlide.dataset.active;
    });
  });
  setInterval(() => {
    const nextButton = document.querySelector("[data-carousel-button='next']");
    nextButton.click();
  }, 5000);

});


document.addEventListener('DOMContentLoaded', function () {
  var navbar = document.querySelector('.navbar');

  window.addEventListener('scroll', function () {
    if (window.scrollY > navbar.offsetTop) {
      navbar.classList.add('fixed-top');
    } else {
      navbar.classList.remove('fixed-top');
    }
  });
});

document.addEventListener('DOMContentLoaded', function () {
  var navbar = document.querySelector('.navbar');
  var titleSection = document.getElementById('title');

  window.addEventListener('scroll', function () {
    if (window.scrollY > navbar.offsetTop) {
      navbar.classList.add('fixed-top');
      titleSection.classList.add('fixed-top');
    } else {
      navbar.classList.remove('fixed-top');
      titleSection.classList.remove('fixed-top');
    }
  });
});

document.addEventListener('DOMContentLoaded', function () {
  var navbar = document.querySelector('.navbar');

  window.addEventListener('scroll', function () {
      if (window.scrollY > navbar.offsetTop) {
          navbar.classList.add('sticky');
      } else {
          navbar.classList.remove('sticky');
      }
  });
});

document.addEventListener('DOMContentLoaded', function () {
  var navbar = document.querySelector('.navbar');

  window.addEventListener('scroll', function () {
    console.log("Scrolling"); // Add this line for debugging

    if (window.scrollY > navbar.offsetTop) {
      navbar.classList.add('fixed-top');
    } else {
      navbar.classList.remove('fixed-top');
    }
  });
});

