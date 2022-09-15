$(document).ready(function () {
  // hero-slider
  $("#hero-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1,
    dots: false,
    smartSpeed: 1000,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    navText: ["PREV", "NEXT"],
    responsive: {
      0: {
        nav: false,
      },
      768: {
        nav: true,
      },
      1000: {},
    },
  });

  // entreprises-slider
  $("#entreprise-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    smartSpeed: 1000,
    margin: 24,
    navText: ["PREV", "NEXT"],
    responsive: {
      0: {
        items: 1,
        nav: false,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: false,
      },
      768: {
        items: 2,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        nav: false,
        dots: true,
      },
      1140: {
        items: 2,
        center: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
      },
    },
  });

  //  avis-slider
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 24,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 2,
      },
    },
  });
});

//  ============================left sidebar======================================
$(document).on("click", "#sidebar li", () => {
  $(this).addClass("active").siblings().removeClass("active");
});

// =========================affichage connexion========================================
const connexion = document.querySelector(".connecter");
const response = document.getElementById("inscrire");
const response11 = document.getElementById("sinscrire");
const response0 = document.getElementById("inscription0");
const response1 = document.getElementById("inscription");
const response2 = document.getElementById("inscription1");
const response3 = document.getElementById("inscription2");
const response4 = document.getElementById("inscription3");
const response5 = document.getElementById("inscription4");
const response6 = document.getElementById("inscription5");
const response7 = document.getElementById("inscription6");
const response8 = document.getElementById("inscription7");
const response9 = document.getElementById("inscription8");
const response10 = document.getElementById("inscription9");
connexion.addEventListener("click", () => {
  response0.style.display = "none";
  response1.style.display = "none";
  response2.style.display = "none";
  response3.style.display = "none";
  response4.style.display = "none";
  response5.style.display = "none";
  response6.style.display = "none";
  response7.style.display = "none";
  response8.style.display = "none";
  response9.style.display = "none";
  response10.style.display = "none";
  response.style.display = "inline";
  response.style.alignItems = "center";
});

response11.addEventListener('click', () =>{
  response.style.display = "none";

  response0.style.display = "inline";
  response1.style.display = "inline";
  response2.style.display = "inline";
  response3.style.display = "inline";
  response4.style.display = "inline";
  response5.style.display = "inline";
  response6.style.display = "inline";
  response7.style.display = "inline";
  response8.style.display = "inline";
  response9.style.display = "inline";
  response10.style.display = "inline";
})

document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    // const deactivateAcc = document.querySelector('#formAccountDeactivation');

    // Update/reset user image of account page
    let accountUserImage = document.getElementById('uploadedAvatar');
    const fileInput = document.querySelector('.account-file-input'),
      resetFileInput = document.querySelector('.account-image-reset');

    if (accountUserImage) {
      const resetImage = accountUserImage.src;
      fileInput.onchange = () => {
        if (fileInput.files[0]) {
          accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
        }
      };
      resetFileInput.onclick = () => {
        fileInput.value = '';
        accountUserImage.src = resetImage;
      };
    }
  })();
});
