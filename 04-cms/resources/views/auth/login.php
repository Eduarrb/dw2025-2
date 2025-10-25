<h1>Iniciar Sesión</h1>

<?php showSwalMensaje(); ?>

<form class="auth__form mt-3">
    <div class="auth__form__group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="tu@email.com"/>
        <span class="auth__form__group__error">Por favor ingresa un email válido</span>
    </div>
    <div class="auth__form__group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" placeholder="********" />
    </div>
    <div class="auth__form__group mt-3">
        <button type="submit" class="btn btn-celeste w-100">Iniciar Sesión</button>
    </div>
</form>
<div class="auth__link">
    <a href="#">¿Olvidaste tu contraseña?</a>
</div>
<div class="auth__link">
    <span>¿No tienes una cuenta? <a href="#">Regístrate</a></span>
</div>