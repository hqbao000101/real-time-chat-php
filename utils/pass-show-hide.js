const signUpPass = document.getElementById("sign-up-pass");
const showPass = document.getElementById("sign-up-eye");
const hidePass = document.getElementById("sign-up-eye-slash");

showPass.onclick = () => {
  signUpPass.setAttribute("type", "text");
  showPass.style.visibility = "hidden";
  hidePass.style.visibility = "visible";
};

hidePass.onclick = () => {
  signUpPass.setAttribute("type", "password");
  showPass.style.visibility = "visible";
  hidePass.style.visibility = "hidden";
};
