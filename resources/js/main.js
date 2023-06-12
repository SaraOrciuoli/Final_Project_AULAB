let navbar = document.querySelector('.navbar');
let navLink = document.querySelector('.nav-link');
let navContainer = document.querySelector('.navContainer');
window.addEventListener('scroll', () => {
    let scrolled = window.scrollY;

    if (scrolled > 20) {
        navbar.classList.add('bg-acc');
        navbar.classList.remove('bg-main');
        navbar.classList.add('navContainer');
        navbar.classList.remove('navbar');
    }
    else {
        navbar.classList.add('bg-main');
        navbar.classList.remove('bg-acc');
        navbar.classList.remove('navContainer');
        navbar.classList.add('navbar');
    }


})