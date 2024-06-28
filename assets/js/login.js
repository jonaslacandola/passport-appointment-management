const registerBtn = document.querySelector("#register-btn");
const loginBtn = document.querySelector("#login-btn");

registerBtn.addEventListener("click", () => {
  const leftSide = document.querySelector("#left-side");
  const rightSide = document.querySelector("#right-side");

  const loginText = document.querySelector("#login-text");
  const registerText = document.querySelector("#register-text");

  const loginForm = document.querySelector("#login-form");
  const registerForm = document.querySelector("#register-form");

  loginText.classList.replace("hide", "show");
  registerText.classList.replace("show", "hide");

  loginForm.classList.replace("container", "container-hidden");
  registerForm.classList.replace("container-hidden", "container");

  leftSide.style.order = 2;
  rightSide.style.order = 1;

  rightSide.style.backgroundImage =
    "linear-gradient(to right, rgba(0, 51, 102, 0), rgba(0, 51, 102, 1.5))";
});

loginBtn.addEventListener("click", () => {
  const leftSide = document.querySelector("#left-side");
  const rightSide = document.querySelector("#right-side");

  const loginText = document.querySelector("#login-text");
  const registerText = document.querySelector("#register-text");

  const loginForm = document.querySelector("#login-form");
  const registerForm = document.querySelector("#register-form");

  registerText.classList.replace("hide", "show");
  loginText.classList.replace("show", "hide");

  registerForm.classList.replace("container", "container-hidden");
  loginForm.classList.replace("container-hidden", "container");

  rightSide.style.order = 2;
  leftSide.style.order = 1;

  rightSide.style.backgroundImage =
    "linear-gradient(to left, rgba(0, 51, 102, 0), rgba(0, 51, 102, 1.5))";
});
