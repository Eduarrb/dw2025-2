<?php require_once '../resources/config.php'; ?>
<?php include VIEW_LAYOUT . 'head.php'; ?>

    <?php include VIEW_LAYOUT . 'nav.php'; ?>
    
    <?php 

        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if($_SERVER['REQUEST_URI'] == "/") {
            include VIEW_INDEX . 'header.php'; 
        }
        if($url == "/producto") {
            include VIEW_PRODUCTO . 'header.php';
        }

        if($url == "/cart") {
            include VIEW_CART . 'header.php';
        }

        if($url == "/admin") {
            include VIEW_ADMIN . 'header.php';
        }
    ?>
    <main class="main pb-5">
        <?php 
            if($_SERVER['REQUEST_URI'] == "/") {
                include VIEW_INDEX . 'filterBtn.php';
            }
        ?>
        <div class="
            <?php echo $_SERVER['REQUEST_URI'] == "/admin" ? "admin" : "main__contenedor"; ?> 
            contenedor 
            <?php echo $_SERVER['REQUEST_URI'] == "/" ? "d-flex gap-3 align-start" : ""; ?>
        ">
            <?php
                if($_SERVER['REQUEST_URI'] == "/") {
                    include VIEW_INDEX . 'index.php';
                }
                if($url == "/producto") {
                    include VIEW_PRODUCTO . 'producto.php';
                    include VIEW_PRODUCTO . 'overview.php';
                    include VIEW_PRODUCTO . 'comentarios.php';
                }
                if($url == "/cart") {
                    include VIEW_CART . "cart.php";
                }

                if($url == "/admin") {
                    include VIEW_ADMIN . 'cards.php';
                    include VIEW_ADMIN . 'formulario.php';
                    include VIEW_ADMIN . 'productos.php';
                }
            ?>
        </div>
    </main>
    <?php include VIEW_LAYOUT . 'footer.php'; ?>
    