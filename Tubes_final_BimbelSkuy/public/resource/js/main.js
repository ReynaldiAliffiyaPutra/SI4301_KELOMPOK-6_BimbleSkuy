sidebar = document.getElementById("sidebar");
body = document.getElementById("content-wrap");
hidesbbtn = document.getElementById("hidesbbtn");

if (localStorage.hasOwnProperty("sidebar_ext")) {
  if (localStorage.getItem("sidebar_ext") == "open") {
    sidebar.classList.remove('collapsed');
    body.classList.remove('extended');
    hidesbbtn.classList.add('close');
  } else {
    sidebar.classList.add('collapsed');
    body.classList.add('extended');
    hidesbbtn.classList.remove('close');
  }
}
console.log(localStorage.getItem("sidebar_ext"));

function hidesb() {
  if (sidebar.classList.contains('collapsed')) {
    sidebar.classList.remove('collapsed');
    body.classList.remove('extended');
    hidesbbtn.classList.add('close');
    localStorage.setItem("sidebar_ext", "open");
  } else {
    sidebar.classList.add('collapsed');
    body.classList.add('extended');
    hidesbbtn.classList.remove('close');
    localStorage.setItem("sidebar_ext", "close");
  }
}