const form = document.querySelector(".typing-area");
const inputField = form.querySelector(".input-field");
const sendBtn = form.querySelector("button");
const chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) => {
  e.preventDefault();
};

function chatBoxScrollToBottom() {
  chatBox.scrollTop = chatBox.scrollHeight;
}

chatBox.onmouseenter = () => {
  chatBox.classList.add("active");
};

chatBox.onmouseleave = () => {
  chatBox.classList.remove("active");
};

sendBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/insert-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        inputField.value = "";
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
};

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/get-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        chatBox.innerHTML = data;
        if (!chatBox.classList.contains("active")) {
          chatBoxScrollToBottom();
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
}, 500);
