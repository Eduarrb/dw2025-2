<div class="admin__formBox mt-3">
    <h2>Agregar nuevo producto</h2>
    <?php showSwalMensaje(); ?>
    <?php post_addProducto(); ?>
    <form class="admin__formBox__form" method="post">
        <div class="admin__formBox__form__group grid-2">
            <div class="admin__formBox__form__group__item">
                <label for="nombre">Nombre Producto</label>
                <input type="text" name="nombre" id="nombre" />
            </div>
            <div class="admin__formBox__form__group__item">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" />
            </div>
        </div>
        <div class="admin__formBox__form__group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
        </div>
        <div class="admin__formBox__form__group grid-3">
            <div class="admin__formBox__form__group__item">
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria">
                    <option value="" selected disabled>- Selecciona una categoria -</option>
                    <?php get_categorias(); ?>
                </select>
            </div>
            <div class="admin__formBox__form__group__item">
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" />
            </div>
            <div class="admin__formBox__form__group__item">
                <label for="stock">Cantidad</label>
                <input type="number" name="stock" id="stock" />
            </div>
        </div>
        <div class="admin__formBox__form__group">
            <label for="imagen">Subir imagen</label>
            <input type="file" name="imagen" id="imagen" />
        </div>
        <div class="admin__formBox__form__group">
            <div class="admin__formBox__form__group__itemCheckbox">
                <input type="checkbox" name="destacado" id="destacado" class="mr-1">
                <label for="destacado">Destacado</label>
            </div>
        </div>
        <div class="admin__formBox__form__group">
            <button class="btn btn-celeste"><i class="fa-solid fa-floppy-disk mr-2"></i> Agregar producto</button>
        </div>
    </form>
</div>