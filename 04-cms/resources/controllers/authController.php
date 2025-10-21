<?php
    function postValidarRegistro(){
        $errores = [];
        $data = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombres = escape($_POST['nombres']);
            $apellidos = escape($_POST['apellidos']);
            $email = escape($_POST['email']);
            $password = escape($_POST['password']);
            $passwordConfirm = escape($_POST['passwordConfirm']);

            if(strlen($nombres) <= 0) {
                $errores['nombres'] = "El campo nombres no debe estar vacio.";
            }

            if(strlen($apellidos) <= 0) {
                $errores['apellidos'] = "El campo apellidos no debe estar vacio.";
            }

            if(!empty($errores)) {
                $data['nombres'] = $nombres;
                $data['apellidos'] = $apellidos;
                return [$errores, $data];
            }
            /*
            [
                errores['nombres' => 'El campo nombres no debe estar vacio.', apellidos => 'El campo apellidos no debe estar vacio.'], ,
                data['nombres' => 'Juan', apellidos => 'Perez']
            ];
            */
            // dd($errores);
        }
    }

?>