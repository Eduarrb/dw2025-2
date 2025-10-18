const menu = document.querySelector('.nav__contenedor__menu');
const btnMenu = document.querySelector('.nav__contenedor__iconMenuBox');
const nav = document.querySelector('.nav');
const header = document.querySelector('.header');

btnMenu.addEventListener('click', function () {
	menu.classList.toggle('active');
});

window.addEventListener('scroll', function () {
	if (scrollY > 0) {
		nav.classList.add('active');
		header.classList.add('active');
	} else {
		nav.classList.remove('active');
		header.classList.remove('active');
	}
});

Array.from(menu.children).forEach((e) => {
	if (e.attributes.href.value === location.pathname) {
		e.classList.add('active');
	} else {
		e.classList.remove('active');
	}
});

