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
let navLink = document.querySelectorAll(".nav-link");
let containerNav = document.querySelector(".containerNav");
let logo = document.querySelector(".logo");
let myBtn = document.querySelectorAll(".box-search");

window.addEventListener("scroll", () => {
    let scrolled = window.scrollY;

    if (scrolled > 20) {
        containerNav.classList.add('bg-acc');
        containerNav.classList.remove('bg-main');
        containerNav.style.width = '100%';
        logo.src = '/media/logo-w.png';
        navLink.forEach(element => {
            element.classList.add('text-main');
            element.classList.remove('text-acc');
            element.classList.add('nav-scroll');
            element.classList.remove('nav-fixed');
        })
        myBtn.forEach(element => {
            element.classList.add('box-search-acc');
            element.classList.remove('box-search');
            element.classList.add('text-main');
            element.classList.remove('text-acc');
            element.classList.add('placeholder-custom-main');
            element.classList.remove('placeholder-custom');

        })

    }
    else {
        containerNav.classList.add('bg-main');
        containerNav.classList.remove('bg-acc');
        containerNav.style.width = '80%';
        logo.src = '/media/logo-b.png';
        navLink.forEach(element => {
            element.classList.add('text-acc');
            element.classList.remove('text-main');
            element.classList.add('nav-fixed');
            element.classList.remove('nav-scroll');
        })
        myBtn.forEach(element => {
            element.classList.remove('box-search-acc');
            element.classList.add('box-search');
            element.classList.remove('text-main');
            element.classList.add('text-acc');
            element.classList.remove('placeholder-custom-main');
            element.classList.add('placeholder-custom');

        })

    }
});

// cards
let cards = document.querySelectorAll(".card-id");
let targetCard = document.querySelector(".targetCard");

let observerCard = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            cards.forEach((card, i) => {
                card.classList.remove('opacity-0');
                card.classList.add('animationUp');
                card.style.animationDelay = `${i * 0.3}s`
            })
        }
    });
});
observerCard.observe(targetCard);

// testimonial carousel

const swiperTest = new Swiper(".swiper-test2", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

// counter parallax
let numbers = document.querySelectorAll(".numbers");
let container_counter = document.querySelectorAll(".container_counter");
let counter = 0;
let target_counter = document.querySelector(".target_counter");

function FirstCounter() {
    let interval = setInterval(() => {
        numbers.forEach((element) => {
            if (counter < 1234) {
                counter++;
                element.innerHTML = counter;
            } else {
                clearInterval(interval);
            }
        });
        container_counter.forEach((element) => {
            element.classList.add("animation-fade");
        })
    }, 10);
}

let observer_counter = new IntersectionObserver((element) => {
    element.forEach((entries) => {
        if (entries.isIntersecting) {
            FirstCounter();
        }
    });
});

observer_counter.observe(target_counter);


