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

    function escape($str) {
        global $db;
        return trim(mysqli_real_escape_string($db, $str));
    }

    function getDato($array, $index, $campo){
        if(isset($array[$index][$campo])){
            echo $array[$index][$campo];
        } else {
            echo '';
        }
    }
?>