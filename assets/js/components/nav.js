let toggleMenu = document.querySelector('.menu-toggle');
let navBar = document.querySelector('.main-navbar');
let main = document.querySelector('nav');

toggleMenu.addEventListener('click', () => {
    main.classList.toggle('active');
    navBar.classList.toggle('active');
});