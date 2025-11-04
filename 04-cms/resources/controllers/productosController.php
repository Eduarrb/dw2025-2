<?php
    function post_addProducto(){
        if(isset($_POST['agregar'])){
            $nombre = escape($_POST['nombre']);
            $marca = escape($_POST['marca']);
            $descripcion = escape($_POST['descripcion']);
            $categoria = escape($_POST['categoria']);
            $precio = escape($_POST['precio']);
            $stock = escape($_POST['stock']);
            $destacado = $_POST['destacado'] ?? '';
            $imagenName = escape($_FILES['imagen']['name']);
            $imgTemp = $_FILES['imagen']['tmp_name'];

            $imagenName = md5(uniqid()) . "." . explode(".", $imagenName)[1];

            move_uploaded_file($imgTemp, "img/productos/$imagenName");

            $destacado = $destacado == 'on' ? 1 : 0;

            query("INSERT INTO productos (nombre, marca, descripcion, categoria_id, precio, stock, imagen, destacado, estado) VALUES ('$nombre', '$marca', '$descripcion', $categoria, $precio, $stock, '$imagenName', $destacado, 1)");

            setSwal("OK", "El producto fue agregado correctamente", "success");
            redirect("/admin"); 
        }
    }

    function get_Producto($urlParam) {
        if(isset($urlParam)) {
            return arrayAssoc(query("SELECT * FROM productos WHERE id = " . escape($urlParam)));
        }
    }

    function post_editProducto($id, $imagenAterior) {
        if(isset($_POST['editar'])){
            $nombre = escape($_POST['nombre']);
            $marca = escape($_POST['marca']);
            $descripcion = escape($_POST['descripcion']);
            $categoria = escape($_POST['categoria']);
            $precio = escape($_POST['precio']);
            $stock = escape($_POST['stock']);
            $destacado = $_POST['destacado'] ?? '';
            $imagenName = escape($_FILES['imagen']['name']);
            $imgTemp = $_FILES['imagen']['tmp_name'];

            if(!empty($imagenName)) {
                $imagenName = md5(uniqid()) . "." . explode(".", $imagenName)[1];
                move_uploaded_file($imgTemp, "img/productos/$imagenName");
                $imagenAteriorLocation = "img/productos/$imagenAterior";
                unlink($imagenAteriorLocation);
            } else {
                $imagenName = $imagenAterior;
            }

            $res = query("UPDATE productos SET nombre = '$nombre', marca = '$marca', descripcion = '$descripcion', categoria_id = $categoria, precio = $precio, stock = $stock, imagen = '$imagenName', destacado = $destacado WHERE id = $id");

            if($res) {
                setSwal("OK", "El producto fue editado correctamente", "success");
                redirect("/admin"); 
            }
        }
    }

    function get_productosAdmin(){
        $query = query("SELECT a.id AS productoId, a.imagen, a.nombre AS productoNombre, a.marca, b.nombre AS categoriaNombre, a.precio, a.stock, a.estado FROM productos a INNER JOIN categorias b ON a.id = b.id WHERE a.estado = 1");
        while($row = arrayAssoc($query)){
            $categoria = strtoupper($row['categoriaNombre']);
            $producto = <<<DELIMITADOR
                <tr>
                    <td class="prodImg">
                        <div class="prodImg__box">
                            <img src="img/productos/{$row['imagen']}" alt="{$row['productoNombre']}" />
                        </div>
                        <div class="prodImg__data">
                            <span>{$row['productoNombre']}</span>
                            <span>{$row['marca']}</span>
                        </div>
                    </td>
                    <td>
                        <span class="tipo graBgNaranja">
                            {$categoria}
                        </span>
                    </td>
                    <td class="precio">S/ {$row['precio']}</td>
                    <td class="cantidad">{$row['stock']}</td>
                    <td>En Stock</td>
                    <td class="accionesTd">
                        <a href="/admin?edit={$row['productoId']}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#" class="delete" data-id="{$row['productoId']}" data-name="{$row['productoNombre']}"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
DELIMITADOR;
            echo $producto;
        }
    }

    function post_productoDelete(){
        if(isset($_GET['delete'])){
            $id = escape($_GET['delete']);
            $res = query("UPDATE productos SET estado = 0 WHERE id = $id");
            if($res) {
                setSwal("OK", "El producto fue eliminado correctamente", "success");
                redirect("/admin");
            }
        }
    }
?>