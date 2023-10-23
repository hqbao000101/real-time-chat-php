const signUpPass = document.querySelector("form .input input[type='password']");
const showPass = document.querySelector("form .input i.fa-eye");
const hidePass = document.querySelector("form .input i.fa-eye-slash");

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
