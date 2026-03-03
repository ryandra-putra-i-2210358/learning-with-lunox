
const menuToggle = document.querySelector('.menu-toggle input');
const navUl = document.querySelector('nav ul')
menuToggle.addEventListener('click', () => {
    navUl.classList.toggle('slide');
})