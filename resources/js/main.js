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


let navLink = document.querySelectorAll('.nav-link');
let containerNav = document.querySelector('.containerNav');


window.addEventListener('scroll', () => {
    let scrolled = window.scrollY;

    if (scrolled > 20) {
        containerNav.classList.add('bg-acc');
        containerNav.classList.remove('bg-main');
        navLink.classList.add('text-main');
        navLink.classList.remove('text-acc');
    }
    else {
        containerNav.classList.add('bg-main');
        containerNav.classList.remove('bg-acc');
        navLink.classList.add('text-acc');
        navLink.classList.remove('text-main');
    }
});

// cards
let cards = document.querySelectorAll('.card-id');
let targetCard = document.querySelector('.targetCard');

let observerCard = new IntersectionObserver((entries) => {

    entries.forEach(entry => {
        if (entry.isIntersecting) {
            cards.forEach((card,i) =>{
                card.classList.remove('opacity-0');
                card.classList.add('animationUp');
                card.style.animationDelay = `${i*0.5}s`
            })
        }
    })
})
observerCard.observe(targetCard);
