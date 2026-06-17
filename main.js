const nav = document.querySelector(".custom-nav");
const btn = document.querySelector(".menu-btn i");

document.querySelector(".menu-btn").addEventListener("click", () => {
  nav.classList.toggle("active");

  if (nav.classList.contains("active")) {
    btn.classList.remove("fa-bars");
    btn.classList.add("fa-xmark");
  } else {
    btn.classList.remove("fa-xmark");
    btn.classList.add("fa-bars");
  }
});

// // menu overlay
// const menu = document.querySelector(".menu-overlay");

// // open
// document.querySelector(".menu-btn").addEventListener("click", () => {
//   menu.classList.add("active");
// });

// // close
// document.querySelector(".close-btn").addEventListener("click", () => {
//   menu.classList.remove("active");
// });
