<?php
    require_once "db.php";
    
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    defined("VIEW_LAYOUT") ? null : define("VIEW_LAYOUT", __DIR__ . DS . "views" . DS . "layout" . DS);
    defined("VIEW_INDEX") ? null : define("VIEW_INDEX", __DIR__ . DS . "views" . DS . "index" . DS);
    defined("VIEW_PRODUCTO") ? null : define("VIEW_PRODUCTO", __DIR__ . DS . "views" . DS . "producto" . DS);
    defined("VIEW_CART") ? null : define("VIEW_CART", __DIR__ . DS . "views" . DS . "cart" . DS);
    defined("VIEW_ADMIN") ? null : define("VIEW_ADMIN", __DIR__ . DS . "views" . DS . "admin" . DS);

    $db = conectarDB();

    require_once "utils/util.php";
    
    require_once "caller.php";
?>