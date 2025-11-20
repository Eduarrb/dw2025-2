<?php showSwalMensaje(); ?>
<div class="carrito d-flex gap-5">
    <?php if(!isset($_SESSION['id'])): ?>
        <p class="no-items">No tienes Productos agregado a tu carrito 🚚</p>
    <?php else: ?>
        <div class="carrito__items">
            <?php $total = get_userCart(); ?>
            <?php if($total === 0): ?>
                <p class="no-items">
                    No tienes Productos agregado a tu carrito 🚚
                </p>
            <?php endif; ?>
            <?php post_restarCantidad(); ?>
            <?php post_sumarCantidad(); ?>
            <?php post_deleteProductoCarrito(); ?>
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
                     <?php if($total !== 0): ?>
                        <div id="walletBrick_container"></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php if($total !== 0): ?>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <?php 
        $publicKey = $_ENV['mpPublicKey'];
        $id = addCheoutOut(); 
    ?>
    <script>
        const publicKey = "<?php echo $publicKey; ?>";
        const preferenceId = "<?php echo $id; ?>";

        const mp = new MercadoPago(publicKey);

        const bricksBuilder = mp.bricks();
        const renderWalletBrick = async (bricksBuilder) => {
            await bricksBuilder.create("wallet", "walletBrick_container", {
                initialization: {
                    preferenceId: preferenceId,
                }
            });
        };

        renderWalletBrick(bricksBuilder);
    </script>
<?php endif; ?>