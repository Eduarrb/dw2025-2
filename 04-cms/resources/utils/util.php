<?php
    function dd($valor){
        echo '<pre>';
        var_dump($valor);
        echo '</pre>';
    }
    
    function query($query) {
        global $db;
        return mysqli_query($db, $query);
    }

    function arrayAssoc($res) {
        return mysqli_fetch_assoc($res);
    }
?>