<?php
    defined('DB_HOST') ? null : define('DB_HOST', 'localhost');
    defined('DB_NAME') ? null : define('DB_NAME', 'pcmaster');
    defined('DB_USER') ? null : define('DB_USER', 'root');
    defined('DB_PASS') ? null : define('DB_PASS', 'web12345678');

    function conectarDB() {
        $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(!$db) {
            echo "Error no se pudo conectar";
            exit;
        } 
        return $db;
    }
?>