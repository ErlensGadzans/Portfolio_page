window.onscroll = function () {
  let nav = document.querySelector(".navbar");
  if (window.scrollY > 20) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
};
