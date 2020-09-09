
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
