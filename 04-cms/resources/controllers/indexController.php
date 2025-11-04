<?php
    function get_productos() {
        $res = query("SELECT a.id AS producto_id, a.nombre AS producto_nombre, a.imagen, a.precio, a.stock, a.destacado, UPPER(b.nombre) AS categoria, UPPER(a.marca) AS marca, a.descripcion FROM productos a INNER JOIN categorias b ON a.categoria_id = b.id");
        while($row = arrayAssoc($res)) {
            if((int)$row['destacado'] === 1) {
                $destacado = <<<DELIMITADOR
                    <span class="products__item__imgBox--destacado destacado">
                        <i class="fa-regular fa-star"></i> Destacado
                    </span>
DELIMITADOR;
            } else {
                $destacado = '';
            }

            $producto = <<<DELIMITER
                <article class="products__item pb-2">
                    <a class="products__item__imgBox" href="producto?id={$row['producto_id']}">
                        <img src="img/productos/{$row['imagen']}" alt="{$row['producto_nombre']}">
                        {$destacado}
                    </a>
                    <div class="products__item__info mt-2 pl-2 pr-2">
                        <span>{$row['categoria']}</span>
                        <span>{$row['marca']}</span>
                    </div>
                    <h3 class="title-n2 pl-2 pr-2 mt-1 mb-1">{$row['producto_nombre']}</h3>
                    <p class="products__item__descri pl-2 pr-2 mb-2">
                        {$row['descripcion']}
                    </p>
                    <div class="products__item__actions pl-2 pr-2">
                        <div class="products__item__actions__box">
                            <span class="products__item__actions__box--price">
                                S/ {$row['precio']}
                            </span>
                            <span class="products__item__actions__box--stock">
                                {$row['stock']} en stock
                            </span>
                        </div>
                        <a href="producto?id={$row['producto_id']}" class="products__item__actions__btn btn btn-celeste">
                            <i class="fa-solid fa-cart-shopping"></i> Agregar
                        </a>
                    </div>
                </article>
DELIMITER;
            echo $producto;
        }
    }
?>