<div class="productoOverview mt-6">
    <div class="productoOverview__menu">
        <a href="#" class="productoOverview__menu--link active">Especificaciones</a>
        <a href="#" class="productoOverview__menu--link">Reviews</a>
    </div>
    <div class="productoOverview__box mt-2">
        <!-- Cometi un error al generar muchas cajas, voy a corregirlo -->
        <!-- tambien debo corregir sus titulos -->
        <div class="productoOverview__box__specs mt-2">
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
        <div class="productoOverview__box__reviews">
            <h3 class="title-n3">
                Deja un comentario sobre el producto
            </h3>
            <form class="productoOverview__box__reviews__form mt-2">
                <div class="productoOverview__box__reviews__form__group">
                    <label for="review">Tu puntuacion</label>
                    <div class="productoOverview__box__reviews__form__group__iconBox">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <!-- con javascript necesitamos hacer el funcionamiento de todas maneras necesitamos capturar el valor -->
                    </div>
                    <input type="hidden" value="0">
                    <!-- este input tipo hidden me ayudara a capturar el valor de las estrellas por eso esta escondido -->
                    <!-- no voy a poner un resumen -->
                </div>
                <div class="productoOverview__box__reviews__form__group">
                    <label for="review">Tu comentario</label>
                    <textarea name="review" id="review" rows="5" placeholder="Escribe tu comentario aqui..."></textarea>
                    <span>0 / 500</span>
                </div>
                <div class="productoOverview__box__reviews__form__group">
                    <button type="submit" class="btn btn-celeste">
                        <i class="fa-solid fa-paper-plane"></i> Enviar comentario
                    </button>
                </div>
            </form>
            
        </div>
    </div>
</div>