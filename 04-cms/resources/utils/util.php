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

    function setSwal($titulo, $texto, $icon) {
        if(!empty($titulo)){
            $_SESSION['titulo'] = $titulo;
            $_SESSION['texto'] = $texto;
            $_SESSION['icon'] = $icon;
        } else {
            $titulo = "";
            $texto = "";
            $icon = "";
        }
    }

    function showSwalMensaje() {
        if(isset($_SESSION['titulo'])) {
            $titulo = $_SESSION['titulo'];
            $texto = $_SESSION['texto'];
            $icon = $_SESSION['icon'];
            $script = <<<DELIMITADOR
                <script>
                    showSwal("$titulo", "$texto", "$icon");
                </script>
DELIMITADOR;
            echo $script;
            unset($_SESSION['titulo'], $_SESSION['texto'], $_SESSION['icon'] );
        }
    }    
?>