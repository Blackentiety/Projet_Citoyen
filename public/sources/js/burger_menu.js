document.addEventListener('DOMContentLoaded', function() {
    const nav = document.querySelector('.main-nav');
    const menu = document.querySelector('#toggler');
    // Cache le menu par défaut sur mobile
    if (window.innerWidth <= 768) {
        nav.style.display = 'none';
        menu.innerHTML = 'menu';
    } else {
        nav.style.display = 'block';
        menu.innerHTML = 'menu';
    }
});

// Ajoute un écouteur d'événement pour le clic sur le menu
function toggler(){
const menu = document.querySelector('#toggler');
const nav = document.querySelector('.main-nav');

if (menu.innerHTML === 'menu') {
    menu.innerHTML = 'close';
    nav.style.display = 'block';
} else {
    menu.innerHTML = 'menu';
    nav.style.display = 'none';}}

window.addEventListener('resize', function() {
    const nav = document.querySelector('.main-nav');
    
    if (window.innerWidth > 768 && nav.style.display === 'none') {
        nav.style.display = 'block';
    }
});

window.addEventListener('resize', function() {
    const nav = document.querySelector('.main-nav');
    menu = document.querySelector('#toggler');
    if (window.innerWidth <= 768 && nav.style.display === 'block') {
        nav.style.display = 'none';
        menu.innerHTML = 'menu';
    }
});

let lastScroll = 0;
const navBar = document.querySelector('header'); // ou adapte le sélecteur à ton bandeau

window.addEventListener('scroll', function() {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    if (currentScroll <= 0) {
        navBar.style.top = '0'; // Toujours visible en haut de page
        return;
    }
    if (currentScroll > lastScroll) {
        // Scroll vers le bas : on cache la nav
        navBar.style.top = '-100px'; // ou la hauteur de ton header
    } else {
        // Scroll vers le haut : on affiche la nav
        navBar.style.top = '0';
    }
    lastScroll = currentScroll;
});


