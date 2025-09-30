const menu = document.querySelector('.nav__contenedor__menu');
const btnMenu = document.querySelector('.nav__contenedor__iconMenuBox');
const nav = document.querySelector('.nav');
const header = document.querySelector('.header');

btnMenu.addEventListener('click', function(){
    menu.classList.toggle('active');
});

window.addEventListener('scroll', function(){
    // console.log(scrollY)
    if(scrollY > 0){
        nav.classList.add('active');
        header.classList.add('active');
    } else {
        nav.classList.remove('active');
        header.classList.remove('active');
    }
})