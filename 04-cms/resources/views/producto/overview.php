<div class="productoOverview mt-6">
    <div class="productoOverview__menu">
        <a href="#" class="productoOverview__menu--link active" data-menu="specs">Especificaciones</a>
        <a href="#" class="productoOverview__menu--link" data-menu="reviews">Reviews</a>
    </div>
    <div class="productoOverview__box mt-2">
        <div class="productoOverview__box__specs mt-2 item" data-block="specs">
            <h3 class="title-n3">
                <span class="tipo graBgNaranja">SPECS</span> Procesador Especificaciones
            </h3>
            <article class="productoOverview__box__specs__item">
                <div class="productoOverview__box__specs__item__icon">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                <div class="productoOverview__box__specs__item__data">
                    <span class="productoOverview__box__specs__item__data--title">Cores</span>
                    <span class="productoOverview__box__specs__item__data--text">16</span>
                </div>
            </article>
            <article class="productoOverview__box__specs__item">
                <div class="productoOverview__box__specs__item__icon">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                <div class="productoOverview__box__specs__item__data">
                    <span class="productoOverview__box__specs__item__data--title">Cores</span>
                    <span class="productoOverview__box__specs__item__data--text">16</span>
                </div>
            </article>
            <article class="productoOverview__box__specs__item">
                <div class="productoOverview__box__specs__item__icon">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                <div class="productoOverview__box__specs__item__data">
                    <span class="productoOverview__box__specs__item__data--title">Cores</span>
                    <span class="productoOverview__box__specs__item__data--text">16</span>
                </div>
            </article>
        </div>
        <div class="productoOverview__box__reviews item active" data-block="reviews">
            <h3 class="title-n3">
                Deja un comentario sobre el producto
            </h3>
            <form class="productoOverview__box__reviews__form mt-2" method="post">
                <div class="productoOverview__box__reviews__form__group">
                    <label for="review">Tu puntuacion</label>
                    <div class="productoOverview__box__reviews__form__group__iconBox">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <input type="hidden" value="0" class="ratingValue" name="ratingValue">
                </div>
                <div class="productoOverview__box__reviews__form__group">
                    <label for="review">Tu comentario</label>
                    <textarea name="review" id="review" rows="5" placeholder="Escribe tu comentario aqui..."></textarea>
                    <span class="charCanti">0 / 500</span>
                </div>
                <div class="productoOverview__box__reviews__form__group">
                    <button type="submit" class="btn btn-celeste" name="reviewAdd">
                        <i class="fa-solid fa-paper-plane"></i> Enviar comentario
                    </button>
                </div>
            </form>
            <?php post_addReview(); ?>
        </div>
    </div>
</div>

<script src="js/overview.js"></script>