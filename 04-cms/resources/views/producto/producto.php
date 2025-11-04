<?php showSwalMensaje(); ?>
<?php $producto = get_Producto($_GET['id']); ?>
<div class="producto d-flex gap-5">
    <div class="producto__imgBox">
        <span class="producto__imgBox--btn left">
            <i class="fa-solid fa-angle-left"></i>
        </span>
        <div class="producto__imgBox__box">
            <img src="img/productos/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
        </div>
        <span class="producto__imgBox--btn right">
            <i class="fa-solid fa-angle-right"></i>
        </span>
    </div>
    <div class="producto__dataBox">
        <div class="producto__dataBox__tipos d-flex gap-1">
            <span class="tipo graBgNaranja">
                <?php echo strtoupper(get_catStr($producto['categoria_id'])); ?>
            </span>
            <span class="tipo bgNormal">
                <?php echo strtoupper($producto['marca']); ?>
            </span>
            <?php if($producto['destacado'] === '1'): ?>
                <span class="tipo graBgAmarillo"><i class="fa-regular fa-star"></i>Destacado</span>
            <?php endif; ?>
        </div>
        <h2 class="title-n1 mt-1">
            <?php echo $producto['nombre']; ?>
        </h2>
        <p class="producto__dataBox__descri mt-1">
            <?php echo $producto['descripcion']; ?>
        </p>
        <div class="producto__dataBox__valoracion mt-2">
            <span class="producto__dataBox__valoracion--estrella">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </span>
            <span class="producto__dataBox__valoracion--num">(5.0)</span>
            <span class="producto__dataBox__valoracion--separador">
            </span>
            <span class="producto__dataBox__valoracion--canti">235 calificaciones</span>
        </div>
        <div class="producto__dataBox__box mt-2">
            <div class="producto__dataBox__box__top">
                <div class="producto__dataBox__box__top__precio">
                    <span class="producto__dataBox__box__top__precio--oferta">
                        S/ <?php echo $producto['precio']; ?>
                    </span>
                    <!-- <span class="producto__dataBox__box__top__precio--real">$899.99</span> -->
                </div>
                <div class="producto__dataBox__box__top__links">
                    <a href="#" class="producto__dataBox__box__top__links--item mr-2">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                    <a href="#" class="producto__dataBox__box__top__links--item">
                        <i class="fa-solid fa-share-nodes"></i>
                    </a>
                </div>
                
            </div>
            <div class="producto__dataBox__box__stock mt-2">
                <span class="producto__dataBox__box__stock--circle"></span>
                <?php echo $producto['stock']; ?> en stock
            </div>
            <form class="producto__dataBox__box__form mt-2" method="post">
                <div class="producto__dataBox__box__form__canti">
                    <span class="producto__dataBox__box__form__canti--restar">-</span>
                    <input type="number" value="1" min="1" max="<?php echo $producto['stock']; ?>" name="cantidad" />
                    <span class="producto__dataBox__box__form__canti--sumar">+</span>
                </div>
                <button class="btn btn-celeste"><i class="fa-solid fa-cart-shopping"></i> Agregar al carrito</button>
                <!-- <button><i class="fa-solid fa-check"></i> Agregado al carrito</button> -->
            </form>
            <?php post_productoCarritoAdd($_SESSION['id'], $producto['id']); ?>
            <div class="producto__dataBox__box__envio mt-3">
                <p><i class="fa-solid fa-truck"></i> Envio gratis</p>
                <p><i class="fa-solid fa-rotate-left"></i> Política devolución 30 dias</p>
                <p><i class="fa-solid fa-shield"></i> Garantía de 1 año</p>
                <p><i class="fa-solid fa-bolt"></i> Envio inmediato</p>
            </div>
        </div>
    </div>
</div>
