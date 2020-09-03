/*
let sliderImages = document.querySelectorAll(".slide"),
  arrowLeft = document.querySelector("#arrow-left"),
  arrowRight = document.querySelector("#arrow-right"),
  current = 0;

function reset() {
  for (let i = 0; i < sliderImages.length; i++) {
    sliderImages && (sliderImages[i].style.display = "none");
  }
}

function startSlide() {
  reset();
  sliderImages && (sliderImages[0].style.display = "block");
}

function slideLeft() {
  reset();
  sliderImages && (sliderImages[current - 1].style.display = "block");
  current--;
}

function slideRight() {
  reset();
  sliderImages && (sliderImages[current + 1].style.display = "block");
  current++;
}

arrowLeft &&
  arrowLeft.addEventListener("click", function () {
    if (current === 0) {
      current = sliderImages.length;
    }
    slideLeft();
  });

arrowRight &&
  arrowRight.addEventListener("click", function () {
    if (current === sliderImages.length - 1) {
      current = -1;
    }
    slideRight();
  });

startSlide();
*/

const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton &&
  signUpButton.addEventListener("click", () => {
    container.classList.add("right-panel-active");
  });

signInButton &&
  signInButton.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
  });

const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navbarLinks = document.getElementsByClassName("navbar-links")[0];

toggleButton &&
  toggleButton.addEventListener("click", () => {
    navbarLinks.classList.toggle("active");
  });
