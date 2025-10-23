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

    function validar_correo($email) {
        $query = query("SELECT * FROM usuarios WHERE email = '$email'");
        if(mysqli_num_rows($query) > 0) {
            return true;
        }
        return false;
    }

    function redirect($url) {
        header("Location: $url");
    }

    function set_mensaje($msj) {
        if(!empty($msj)){
            $_SESSION['mensaje'] = $msj;
        } else {
            $msj = "";
        }
    }

    function get_mensaje(){
        if(isset($_SESSION['mensaje'])){
            return $_SESSION['mensaje'];
        }
    }
?>