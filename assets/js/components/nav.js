let toggleMenu = document.querySelector('.menu-toggle');
let navBar = document.querySelector('.main-navbar');

toggleMenu.addEventListener('click', () => {
    navBar.classList.toggle('active');
});