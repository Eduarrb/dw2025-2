<?php
    $conexion = mysqli_connect('localhost', 'root', 'web12345678', 'stream');
    if(!$conexion) {
        echo "Fallo en la conexion";
        exit;
    }
?>