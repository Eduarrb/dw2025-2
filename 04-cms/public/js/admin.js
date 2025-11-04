const addProductBtn = document.querySelector('.header__contenedor a');
const addProductForm = document.querySelector('.admin__formBox');

addProductBtn.addEventListener('click', (e) => {
	e.preventDefault();
	addProductForm.classList.add('active');
});

const botonesDelete = document.querySelectorAll('.delete');
botonesDelete.forEach((btn) => {
	btn.addEventListener('click', function (e) {
		e.preventDefault();
		const productoId = this.getAttribute('data-id');
        const productoName = this.getAttribute('data-name');
		Swal.fire({
			title: '¿Estas seguro de eliminar el siguiente producto?',
			text: "Eliminaras el producto: " + productoName,
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: '¡Si, Eliminalo!',
		}).then((result) => {
			if (result.isConfirmed) {
				location.href = location.href + `?delete=${productoId}`;
			}
		});
	});
});
