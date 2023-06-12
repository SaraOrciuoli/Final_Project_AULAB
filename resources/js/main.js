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
let logo = document.querySelector('.logo');
let myBtn = document.querySelectorAll('.my-btn');

window.addEventListener('scroll', () => {
    let scrolled = window.scrollY;

    if (scrolled > 20) {
        containerNav.classList.add('bg-acc');
        containerNav.classList.remove('bg-main');
        logo.src = '/media/logo-w.png';
        navLink.forEach(element => {
            element.classList.add('text-main');
            element.classList.remove('text-acc');
            element.classList.add('nav-scroll');
            element.classList.remove('nav-fixed');
        })
        myBtn.forEach(element => {
            element.classList.add('btn-search-white');
            element.classList.remove('btn-search');
            element.classList.add('btn-logout-white');
            element.classList.remove('btn-logout');
        })
        
    }
    else {
        containerNav.classList.add('bg-main');
        containerNav.classList.remove('bg-acc');
        logo.src = '/media/logo-b.png';
        navLink.forEach(element => {
            element.classList.add('text-acc');
            element.classList.remove('text-main');
            element.classList.add('nav-fixed');
            element.classList.remove('nav-scroll');
        })
        myBtn.forEach(element => {
            element.classList.add('btn-search');
            element.classList.remove('btn-search-white');
            element.classList.add('btn-logout');
            element.classList.remove('btn-logout-white');
        })
        
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
