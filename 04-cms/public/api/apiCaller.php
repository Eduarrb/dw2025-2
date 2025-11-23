<?php
    require_once '../../resources/config.php';

    if(isset($_GET['action']) && $_GET['action'] == 'getComentarios') {
        getComentarios(escape($_GET['idProducto']));
    }
?>