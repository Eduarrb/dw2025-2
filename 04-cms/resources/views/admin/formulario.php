<div class="admin__formBox mt-3">
    <h2>Agregar nuevo producto</h2>
    <form class="admin__formBox__form">
        <div class="admin__formBox__form__group grid-2">
            <div class="admin__formBox__form__group__item">
                <label for="">Nombre Producto</label>
                <input type="text" />
            </div>
            <div class="admin__formBox__form__group__item">
                <label for="">Marca</label>
                <input type="text" />
            </div>
        </div>
        <div class="admin__formBox__form__group">
            <label for="">Descripción</label>
            <textarea name="" id="" cols="30" rows="5"></textarea>
        </div>
        <div class="admin__formBox__form__group grid-3">
            <div class="admin__formBox__form__group__item">
                <label for="">Categoria</label>
                <select name="" id="">
                    <option value="">Procesador</option>
                    <option value="">Procesador</option>
                </select>
            </div>
            <div class="admin__formBox__form__group__item">
                <label for="">Precio</label>
                <input type="number" />
            </div>
            <div class="admin__formBox__form__group__item">
                <label for="">Cantidad</label>
                <input type="number" />
            </div>
        </div>
        <div class="admin__formBox__form__group">
            <label for="">Subir imagen</label>
            <input type="file" />
        </div>
        <div class="admin__formBox__form__group">
            <div class="admin__formBox__form__group__itemCheckbox">
                <input type="checkbox" name="" id="" class="mr-1">
                <label for="">Destacado</label>
            </div>
        </div>
        <div class="admin__formBox__form__group">
            <button class="btn btn-celeste"><i class="fa-solid fa-floppy-disk mr-2"></i> Agregar producto</button>
        </div>
    </form>
</div>