<?php
    if(!isset($_SESSION['rol'])) {
        redirect('./');
    }
    if($_SESSION['rol'] !== 'admin') {
        redirect("./");
    }
?>

<header class="header">
    <div class="header__contenedor contenedor admin">
        <div class="header__contenedor__titleBox">
            <h1 class="title-n1">Admin Dashboard</h1>
            <p>Manjea tu inventario</p>
        </div>
        <a href="#" class="btn btn-celeste">
            <i class="fa-solid fa-plus"></i> Agregar producto
        </a>
    </div>
</header>