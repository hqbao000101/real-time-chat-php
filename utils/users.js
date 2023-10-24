const searchBar = document.querySelector(".users .search input");
const searchBtn = document.querySelector(".users .search button");
const userList = document.querySelector(".users .users-list");

searchBtn.onclick = () => {
  searchBar.classList.toggle("active");
  searchBtn.classList.toggle("active");
  searchBar.focus();
};

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "../php/users.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        userList.innerHTML = data;
      }
    }
  };
  xhr.send();
}, 500);
