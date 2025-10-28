<?php

    function post_addProducto(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = escape($_POST['nombre']);
            $marca = escape($_POST['marca']);
            $descripcion = escape($_POST['descripcion']);
            $categoria = escape($_POST['categoria']);
            $precio = escape($_POST['precio']);
            $stock = escape($_POST['stock']);
            $destacado = escape($_POST['destacado']);

            $query = query("INSERT INTO productos (nombre, marca, descripcion, categoria_id, precio, stock, imagen, destacado, estado) VALUES ('$nombre', '$marca', '$descripcion', $categoria, $precio, $stock, '01.png', 1, 1)");

            // setSwal("OK", "El producto fue agregado correctamente", "success");
            redirect("/admin"); 
        }
    }
?>