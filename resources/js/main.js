// swiper

import Swiper from "swiper/bundle";
const swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 30,
    effect: "fade",
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

// navbar
let navbar = document.querySelector(".navbar");
let navLink = document.querySelector(".nav-link");
let navContainer = document.querySelector(".navContainer");
window.addEventListener("scroll", () => {
    let scrolled = window.scrollY;

    if (scrolled > 20) {
        navbar.classList.add("bg-acc");
        navbar.classList.remove("bg-main");
        navbar.classList.add("navContainer");
        navbar.classList.remove("navbar");
    } else {
        navbar.classList.add("bg-main");
        navbar.classList.remove("bg-acc");
        navbar.classList.remove("navContainer");
        navbar.classList.add("navbar");
    }
});
