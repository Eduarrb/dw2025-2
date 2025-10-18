const prodSum = document.querySelector('.producto__dataBox__box__form__canti--sumar');
const prodRes = document.querySelector('.producto__dataBox__box__form__canti--restar');
const prodInput = document.querySelector('.producto__dataBox__box__form__canti input');

prodSum.addEventListener('click', function () {
    prodInput.value = +prodInput.value + 1;
});

prodRes.addEventListener('click', function() {
    if(prodInput.value < 2) {
        return false
    } else {
        prodInput.value = +prodInput.value - 1;
    }
})