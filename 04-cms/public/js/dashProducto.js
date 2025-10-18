const prodSum = document.querySelector('.producto__dataBox__box__form__canti--sumar');
const prodRes = document.querySelector('.producto__dataBox__box__form__canti--restar');
const prodInput = document.querySelector('.producto__dataBox__box__form__canti input');

const prodOverMenuLinks = document.querySelectorAll('.productoOverview__menu--link');

const bloques = document.querySelectorAll('.productoOverview__box .item');

prodSum.addEventListener('click', function () {
	prodInput.value = +prodInput.value + 1;
});

prodRes.addEventListener('click', function () {
	if (prodInput.value < 2) {
		return false;
	} else {
		prodInput.value = +prodInput.value - 1;
	}
});

prodOverMenuLinks.forEach((link) => {
	link.addEventListener('click', (e) => {
		e.preventDefault();
		prodOverMenuLinks.forEach((i) => i.classList.remove('active'));
        bloques.forEach(i => {
            if(i.dataset.block === e.target.dataset.menu) {
                i.classList.remove('active');
            } else {
                i.classList.add('active');
            }
        })
		e.target.classList.add('active');
	});
});
