const addProductBtn = document.querySelector('.header__contenedor a');
const addProductForm = document.querySelector('.admin__formBox');

addProductBtn.addEventListener('click', e => {
    e.preventDefault();
    addProductForm.classList.add('active');
})