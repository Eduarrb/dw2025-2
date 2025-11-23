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

const obtenerJson = async () => {
	try {
		const id = window.location.search.split('=')[1];
		const res = await axios.get('api/apiCaller.php', {
			params: {
				action: 'getComentarios',
				idProducto: id
			}
		});
		return res.data;
		
	} catch (error) {
		console.log(error)
	}
}

const comentariosBox = document.querySelector('.comentarios__listBox');

const renderComentarios = async () => {
	const data = await obtenerJson();
	let plantilla = '';
	data.forEach(comentario => {
		const fechaMoment = moment(comentario.fecha).locale('es');

		let estrellas = '';
		for (let i = 0; i < comentario.calificacion; i++) {
			estrellas += '<i class="fa-solid fa-star"></i>';
		}

		if(comentario.calificacion != 5) {
			for (let j = 0; j < 5 - comentario.calificacion; j++) {
				estrellas += '<i class="fa-regular fa-star"></i>';
			}
		}

		plantilla += `
			<article class="comentarios__listBox__item">
				<div class="comentarios__listBox__item__top">
					<div class="comentarios__listBox__item__top__user">
						<div class="comentarios__listBox__item__top__user__img">
							<img src="img/clientes/01.jpg" alt="Eduardo Arroyo">
						</div>
						<div class="comentarios__listBox__item__top__user__data">
							<span class="comentarios__listBox__item__top__user__data--name">${comentario.nombres} ${comentario.apellidos}</span>
							<span class="comentarios__listBox__item__top__user__data--date">${fechaMoment.fromNow()}</span>
						</div>
					</div>
					<div class="comentarios__listBox__item__top__valoracion">
						${estrellas}
					</div>
				</div>
				<div class="comentarios__listBox__item__comentario mt-2">
					<p>${comentario.comentario}</p>
				</div>
			</article>
		`;
	})
	comentariosBox.innerHTML = plantilla;
}

renderComentarios()