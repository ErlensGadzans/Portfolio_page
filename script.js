//scroll function Addind & removing navbar background
window.onscroll = function () {
  let nav = document.querySelector(".navbar");
  let scroll = document.querySelector(".scroll_btn");
  if (window.scrollY > 20) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
  if (window.scrollY > 500) {
    console.log(scroll);
    scroll.classList.add("show");
    document.querySelector(".scroll_btn").onclick = function () {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    };
  } else {
    scroll.classList.remove("show");
  }
};

//navbar menu responsive Button shows menu
function responiveMenu() {
  let element = document.querySelector(".navbar .menu");
  element.classList.toggle("active");

  let element2 = document.querySelector(".menu_btn i");
  element2.classList.toggle("active");
}
