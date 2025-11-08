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

    function get_userCart(){
        $productos = query("SELECT * FROM carrito a INNER JOIN productos b ON a.producto_id = b.id WHERE a.user_id = {$_SESSION['id']}");
        $total = 0;
        while($row = arrayAssoc($productos)){
            $subTotal = $row['precio'] * $row['cantidad'];
            $total += $subTotal;
            $producto = <<<DELIMITADOR
                <article class="carrito__items__producto mb-1">
                    <div class="carrito__items__producto__imgBox">
                        <img src="img/productos/{$row['imagen']}" alt="{$row['nombre']}" width="80" />
                    </div>
                    <div class="carrito__items__producto__info">
                        <h3>{$row['nombre']}</h3>
                        <p>{$row['marca']}</p>
                        <span>S/ {$row['precio']}</span>
                    </div>
                    <div class="carrito__items__producto__cantidad">
                        <form method="post">
                            <input type="hidden" name="producto_id" value="{$row['id']}">
                            <button type="submit" name="restar">-</button>
                        </form>
                        <span>{$row['cantidad']}</span>
                        <form method="post">
                            <input type="hidden" name="producto_id" value="{$row['id']}">
                            <input type="hidden" name="cantidad" value="{$row['cantidad']}">
                            <button type="submit" name="sumar">+</button>
                        </form>
                    </div>
                    <a href="/cart?delete&producto_id={$row['id']}&user_id={$_SESSION['id']}" class="carrito__items__producto__eliminar">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                    <div class="carrito__items__producto__total">
                        <span>S/ {$subTotal}</span>
                    </div>
                </article>
DELIMITADOR;
            echo $producto;
        }
        return $total;
    }

    function post_deleteProductoCarrito(){
        if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete'])) {
            query("DELETE FROM carrito WHERE user_id = {$_GET['user_id']} AND producto_id = {$_GET['producto_id']}");
            setSwal('Producto Eliminado', 'El producto ha sido eliminado del carrito', 'success');
            redirect("/cart");
        }
    }

    function post_restarCantidad() {
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['restar'])) {
            $producto_id = escape($_POST['producto_id']);
            $user_id = $_SESSION['id'];
            $query = query("SELECT * FROM carrito WHERE user_id = $user_id AND producto_id = $producto_id");
            $cantidad = arrayAssoc($query)['cantidad'];
            if($cantidad == 1) {
                setSwal('Cantidad Mínima', 'La cantidad mínima es 1', 'info');
                redirect("/cart");
            } else {
                query("UPDATE carrito SET cantidad = cantidad - 1 WHERE user_id = $user_id AND producto_id = $producto_id");
                redirect("/cart");
            }
        }
    }

    function post_sumarCantidad(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sumar'])) {
            $producto_id = escape($_POST['producto_id']);
            $user_id = $_SESSION['id'];
            $cantidad = escape($_POST['cantidad']);
            $query = query("SELECT * FROM productos WHERE id = $producto_id");
            $stock = arrayAssoc($query)['stock'];
            if($cantidad >= $stock) {
                setSwal('Cantidad Máxima', 'Has alcanzado la cantidad máxima disponible en stock', 'info');
                redirect("/cart");
            } else {
                query("UPDATE carrito SET cantidad = cantidad + 1 WHERE user_id = $user_id AND producto_id = $producto_id");
                redirect("/cart");
            }
            
        }
    }

    use MercadoPago\MercadoPagoConfig;
    MercadoPagoConfig::setAccessToken("token aqui");
    use MercadoPago\Client\Preference\PreferenceClient;

    function addCheckout(){
        $client = new PreferenceClient();
        $preference = $client->create([
            "items"=> array(
                array(
                    "title" => "Mi producto",
                    "quantity" => 1,
                    "unit_price" => 2000
                )
            )
        ]);

        dd($preference);
    }
?>