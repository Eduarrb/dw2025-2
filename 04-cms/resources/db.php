<?php
    define("DB_HOST", $_ENV['DB_HOST']);
    define("DB_NAME", $_ENV['DB_NAME']);
    define("DB_USER", $_ENV['DB_USER']);
    define("DB_PASS", $_ENV['DB_PASS']);

    function conectarDB() {
        $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(!$db) {
            echo "Error no se pudo conectar";
            exit;
        } 
        return $db;
    }
?>