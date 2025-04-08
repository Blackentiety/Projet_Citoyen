
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

