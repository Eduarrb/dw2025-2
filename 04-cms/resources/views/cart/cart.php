<?php showSwalMensaje(); ?>
<div class="carrito d-flex gap-5">
    <div class="carrito__items">
        <?php $total = get_userCart(); ?>
        <?php post_restarCantidad(); ?>
        <?php post_sumarCantidad(); ?>
        <?php post_deleteProductoCarrito(); ?>
        <!-- <div class="carrito__items__alerta">
            <span>¡Cantidad máxima alcanzada!</span>
        </div> -->
    </div>
    <div class="carrito__resumen">
        <h2>Resumen del Carrito</h2>
        <div class="carrito__resumen__detalle">
            <div class="carrito__resumen__detalle__subTotal d-flex justify-content-between">
                <span>Subtotal</span>
                <span>S/ <?php echo number_format($total, 2); ?></span>
            </div>
            <div class="carrito__resumen__detalle__envio d-flex justify-content-between mt-1">
                <span>Envío</span>
                <span>Gratis</span>
            </div>
            <hr class="mt-1 mb-1">
            <div class="carrito__resumen__detalle__total d-flex justify-content-between mt-2">
                <span>Total</span>
                <span>S/ <?php echo number_format($total, 2); ?></span>
            </div>
            <div class="carrito__resumen__detalle__item__btnBox mt-2">
                <button class="btn btn-celeste w-100">Proceder al Pago</button>
            </div>
        </div>
    </div>
</div>
<?php addCheckout(); ?>