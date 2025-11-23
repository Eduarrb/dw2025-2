<?php
    function post_productoCarritoAdd($userId, $productoId) {
        if(isset($_POST['carritoAdd'])) {
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
    use MercadoPago\Client\Preference\PreferenceClient;
    MercadoPagoConfig::setAccessToken($_ENV['mpAccessToken']);

    function addCheoutOut() {
        $query = query("SELECT * FROM carrito WHERE user_id = {$_SESSION['id']}");
        $canti = 0;
        $total = 0;
        while($row = arrayAssoc($query)){
            $canti += $row['cantidad'];
            $prodQuery = query("SELECT * FROM productos WHERE id = {$row['producto_id']}");
            $precio = arrayAssoc($prodQuery)['precio'];
            $total += $precio * $row['cantidad'];
        }

        $client = new PreferenceClient();
        $preference = $client->create([
            "back_urls" => array(
                "success" => "localhost:3000/success",
                "failure" => "localhost:3000/failure",
                "pending" => "localhost:3000/pending"
            ),
            "auto_return" => "all",
            "items"=> array(
                array(
                    "title" => "Mi pedido",
                    "quantity" => 1,
                    "unit_price" => $total
                )
            ),
        ]);
        $_SESSION['preference_id'] = $preference->id;
        $_SESSION['total'] = $total;
        return $preference->id;
    }

    function successCheckout() {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if($url == "/success") {
            if(!isset($_SESSION['id'])) {
                redirect("/");
            }
            if($_SESSION['preference_id'] == $_GET['preference_id']) {
                query("INSERT INTO pedidos (user_id, total, fecha, estado) VALUES ({$_SESSION['id']}, {$_SESSION['total']}, NOW(), 'success')");
                global $db;
                $id_pedido = mysqli_insert_id($db);

                $carritoQuery = query("SELECT a.producto_id, a.cantidad, b.precio FROM carrito a INNER JOIN productos b ON a.producto_id = b.id WHERE a.user_id = {$_SESSION['id']}");

                while($row = arrayAssoc($carritoQuery)){
                    query("INSERT INTO detalle_pedidos (pedido_id, producto_id, cantidad, precio_unitario) VALUES ($id_pedido, {$row['producto_id']}, {$row['cantidad']}, {$row['precio']})");
                }

                query("DELETE FROM carrito WHERE user_id = {$_SESSION['id']}");
                setSwal('Compra Exitosa', 'Tu compra se ha realizado con éxito', 'success');
                redirect("/");

            } else {
                redirect("/");
            }
        }
    }

?>