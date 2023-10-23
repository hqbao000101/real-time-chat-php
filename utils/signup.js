const form = document.querySelector(".signup form");
const continueBtn = form.querySelector(".button input");
const errTxt = document.querySelector("form .error-txt");

form.onsubmit = (e) => {
  e.preventDefault();
};

continueBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/signup.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data == "succeed") {
          errTxt.style.display = "none";
          window.location.href = "./pages/users.php";
        } else {
          errTxt.style.display = "block";
          errTxt.innerHTML = data;
        }
      }
    }
  };
  // ! Creating FormData send to php
  let formData = new FormData(form);
  xhr.send(formData);
};
