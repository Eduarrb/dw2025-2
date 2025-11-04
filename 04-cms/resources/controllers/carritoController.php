<?php
    function post_productoCarritoAdd($userId, $productoId) {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cantidad = escape($_POST['cantidad']);
            $query = query("SELECT * FROM carrito WHERE user_id = $userId AND producto_id = $productoId");

            if(mysqli_num_rows($query) == 1) {
                setSwal('Producto Existente', 'El producto ya se encuentra en el carrito', 'info');
                redirect("/producto?id=$productoId");
                return;
            }

            $query = query("INSERT INTO carrito (user_id, producto_id, cantidad) VALUES ($userId, $productoId, $cantidad)");
            if($query) {
                setSwal('Producto Agregado', 'El producto se ha agregado al carrito correctamente', 'success');
                redirect("/producto?id=$productoId");
            }
        }
    }

?>