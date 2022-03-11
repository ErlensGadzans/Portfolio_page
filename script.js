//scroll function Addind & removing navbar background
window.onscroll = function () {
  let nav = document.querySelector(".navbar");
  if (window.scrollY > 20) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
};

//navbar menu responsive Button shows menu

function responiveMenu() {
  let element = document.querySelector(".navbar .menu");
  element.classList.toggle("active");

  let element2 = document.querySelector(".menu_btn i");
  element2.classList.toggle("active");
}
