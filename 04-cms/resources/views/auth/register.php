<h1>Crear Cuenta</h1>
<?php $res = postValidarRegistro(); ?>
<form class="auth__form mt-3" method="POST">
    <div class="auth__form__group">
        <label for="nombres">Nombres</label>
        <input type="text" id="nombres" name="nombres" value="<?php getDato($res, 1, 'nombres'); ?>" />
        <span class="auth__form__group__error">
            <?php getDato($res, 0, 'nombres'); ?>
        </span>
    </div>
    <div class="auth__form__group">
        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos" />
        <span class="auth__form__group__error">
        </span>
    </div>
    <div class="auth__form__group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" />
        <span class="auth__form__group__error">
        </span>
    </div>
    <div class="auth__form__group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" />
        <span class="auth__form__group__error">
        </span>
    </div>
    <div class="auth__form__group">
        <label for="passwordConfirm">Confirma tu Contraseña</label>
        <input type="password" id="passwordConfirm" name="passwordConfirm" />
        <span class="auth__form__group__error">
        </span>
    </div>
    <div class="auth__form__group mt-3">
        <button type="submit" class="btn btn-celeste w-100">Iniciar Sesión</button>
    </div>
</form>
<div class="auth__link">
    <span>¿Ya tienes cuenta? <a href="/auth/login">Iniciar Sesión</a></span>
</div>