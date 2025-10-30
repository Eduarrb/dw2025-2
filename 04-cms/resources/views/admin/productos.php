<div class="productosLista mt-3">
    <div class="productosLista__top">
        <h3>Inventario</h3>
        <div class="productosLista__top__search">
            <div class="productosLista__top__search__inputBox">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar producto..." />
            </div>
            <select>
                <option value="">Lo mas nuevo</option>
                <option value="">Lo mas vendido</option>
                <option value="">Lo mas comentado</option>
            </select>
        </div>
    </div>
    <table class="productosLista__table mt-4">
        <thead>
            <tr>
                <th class="prodImgTitle">Producto</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Status</th>
                <th class="acciones">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php get_productosAdmin(); ?>
        </tbody>
    </table>
</div>

<script src="js/admin.js"></script>