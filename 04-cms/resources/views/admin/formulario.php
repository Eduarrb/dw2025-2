<div class="admin__formBox mt-3 <?php echo isset($_GET['edit']) ? "active" : ""; ?>">
    <h2>Agregar nuevo producto</h2>
    <?php showSwalMensaje(); ?>
    <?php post_addProducto(); ?>
    <?php $res = get_editProducto(); ?>
    <?php post_editProducto(); ?>
    <form class="admin__formBox__form" method="post" enctype="multipart/form-data">
        <div class="admin__formBox__form__group grid-2">
            <div class="admin__formBox__form__group__item">
                <label for="nombre">Nombre Producto</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $res['nombre'] ?? ''; ?>" />
            </div>
            <div class="admin__formBox__form__group__item">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" value="<?php echo $res['marca'] ?? ''; ?>" />
            </div>
        </div>
        <div class="admin__formBox__form__group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="5"><?php echo $res['descripcion'] ?? ''; ?></textarea>
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
                <input type="number" name="precio" id="precio" value="<?php echo $res['precio'] ?? ''; ?>" />
            </div>
            <div class="admin__formBox__form__group__item">
                <label for="stock">Cantidad</label>
                <input type="number" name="stock" id="stock" value="<?php echo $res['stock'] ?? ''; ?>" />
            </div>
        </div>
        <?php if(isset($_GET['edit'])): ?>
            <div class="admin__formBox__form__group">
                <img src="img/productos/<?php echo $res['imagen'] ?? '' ?>" alt="<?php echo $res['nombre'] ?? ''; ?>" width="250">
            </div>
        <?php endif ?>
        <div class="admin__formBox__form__group">
            <label for="imagen">Subir imagen</label>
            <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png, image/webp" />
        </div>
        <div class="admin__formBox__form__group">
            <div class="admin__formBox__form__group__itemCheckbox">
                <input type="checkbox" name="destacado" id="destacado" class="mr-1">
                <label for="destacado">Destacado</label>
            </div>
        </div>
        <div class="admin__formBox__form__group">
            <?php if(isset($_GET['edit'])): ?>
                <button class="btn graBgAmarillo" name="editar"><i class="fa-solid fa-pen-to-square mr-2"></i> Editar producto</button>
            <?php else: ?>  
                <button class="btn btn-celeste" name="agregar"><i class="fa-solid fa-floppy-disk mr-2"></i> Agregar producto</button>
            <?php endif; ?>
        </div>
    </form>
</div>