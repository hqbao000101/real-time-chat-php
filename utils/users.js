const searchBar = document.querySelector(".users .search input");
const searchBtn = document.querySelector(".users .search button");
const userList = document.querySelector(".users .users-list");

searchBtn.onclick = () => {
  searchBar.classList.toggle("active");
  searchBtn.classList.toggle("active");
  searchBar.focus();
  searchBar.value = "";
  searchBar.classList.contains("searching") && searchBar.classList.remove("searching");
};

// ! reload users list every 500ms
setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "../php/users.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (!searchBar.classList.contains("searching")) {
          userList.innerHTML = data;
        }
      }
    }
  };
  xhr.send();
}, 500);

// ! set searchBar keyup event
searchBar.onkeyup = (e) => {
  let searchKey = e.target.value;
  searchKey != "" ? searchBar.classList.add("searching") : searchBar.classList.remove("searching");
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/search.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        userList.innerHTML = data;
      }
    }
  };
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchKey=" + searchKey);
}