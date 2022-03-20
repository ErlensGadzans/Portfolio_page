//Home page animation Typing effect
let i = 0;
const text = "  Software Developer";
let speed = 200;
window.onload = function typeEffect() {
  const emptySpan = document.getElementById("animated_text");
  emptySpan.innerHTML += text.charAt(i);
  i++;
  setTimeout(typeEffect, speed);
};

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
    // console.log(scroll);
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

//map section
let map;
function initMap() {
  const location = { lat: 56.946285, lng: 24.105078 };
  const icon = {
    url: "../img/Riga.png", // url
    scaledSize: new google.maps.Size(50, 50), // size
  };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 6,
    center: location,
    streetViewControl: false,
    fullscreenControl: false,
    mapTypeControl: false,
    styles: [
      {
        featureType: "all",
        elementType: "labels.text.fill",
        stylers: [
          {
            saturation: 36,
          },
          {
            color: "#a81010",
          },
          {
            lightness: 40,
          },
        ],
      },
      {
        featureType: "all",
        elementType: "labels.text.stroke",
        stylers: [
          {
            visibility: "on",
          },
          {
            color: "#000000",
          },
          {
            lightness: 16,
          },
        ],
      },
      {
        featureType: "all",
        elementType: "labels.icon",
        stylers: [
          {
            visibility: "off",
          },
        ],
      },
      {
        featureType: "administrative",
        elementType: "geometry.fill",
        stylers: [
          {
            color: "#a81010",
          },
          {
            lightness: 20,
          },
        ],
      },
      {
        featureType: "administrative",
        elementType: "geometry.stroke",
        stylers: [
          {
            color: "#a81010",
          },
          {
            lightness: 17,
          },
          {
            weight: 1.2,
          },
        ],
      },
      {
        featureType: "landscape",
        elementType: "geometry",
        stylers: [
          {
            lightness: 20,
          },
          {
            color: "#383838",
          },
        ],
      },
      {
        featureType: "poi",
        elementType: "geometry",
        stylers: [
          {
            color: "#000000",
          },
          {
            lightness: 21,
          },
        ],
      },
      {
        featureType: "road.highway",
        elementType: "geometry.fill",
        stylers: [
          {
            color: "#000000",
          },
          {
            lightness: 17,
          },
        ],
      },
      {
        featureType: "road.highway",
        elementType: "geometry.stroke",
        stylers: [
          {
            color: "#000000",
          },
          {
            lightness: 29,
          },
          {
            weight: 0.2,
          },
        ],
      },
      {
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [
          {
            color: "#000000",
          },
          {
            lightness: 18,
          },
        ],
      },
      {
        featureType: "road.local",
        elementType: "geometry",
        stylers: [
          {
            color: "#a81010",
          },
          {
            lightness: 16,
          },
        ],
      },
      {
        featureType: "transit",
        elementType: "geometry",
        stylers: [
          {
            lightness: 19,
          },
          {
            color: "#404040",
          },
        ],
      },
      {
        featureType: "water",
        elementType: "geometry",
        stylers: [
          {
            color: "#000000",
          },
          {
            lightness: 17,
          },
        ],
      },
    ],
  });
  new google.maps.Marker({
    position: new google.maps.LatLng(56.947123, 24.106816),
    map,
  });
}
