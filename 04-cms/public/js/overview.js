const stars = document.querySelectorAll('.productoOverview__box__reviews__form__group__iconBox i');
const ratingValueInput = document.querySelector('.ratingValue');

const starsArray = Array.from(stars).reverse();

starsArray.forEach((star, index) => {
    star.addEventListener('click', () => {
        ratingValueInput.value = index + 1;

        starsArray.forEach((s, i) => {
            if(i <= index) {
                s.classList.remove('fa-regular');
                s.classList.add('fa-solid');
                s.classList.add('active');
            } else {
                s.classList.remove('fa-solid');
                s.classList.add('fa-regular');
                s.classList.remove('active');
            }
        })
    })
})