const menu = document.querySelector('.nav__contenedor__menu');
const btnMenu = document.querySelector('.nav__contenedor__iconMenuBox');

btnMenu.addEventListener('click', function(){
    menu.classList.toggle('active');
});