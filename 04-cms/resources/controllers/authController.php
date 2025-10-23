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

            if(strlen($email) <= 0) {
                $errores['email'] = "El campo correo no debe estar vacio.";
            }

            if(validar_correo($email)) {
                $errores['email'] = "El correo ya está registrado.";
            }

            if(strlen($password) <= 0 || strlen($password) < 6) {
                $errores['password'] = "El campo contraseña no debe estar vacio y debe tener al menos 6 caracteres.";
            }

            if($password !== $passwordConfirm) {
                $errores['passwordConfirm'] = "Las contraseñas no son  iguales.";
            }

            if(!empty($errores)) {
                $data['nombres'] = $nombres;
                $data['apellidos'] = $apellidos;
                $data['email'] = $email;
                return [$errores, $data];
            } else {
                post_registroUsuario($nombres, $apellidos, $email, $password);
            }
        }
    }

    function post_registroUsuario($nombres, $apellidos, $email, $password) {
        $token = md5($email);
        $res = query("INSERT INTO usuarios (nombres, apellidos, email, password, rol, estado, token) VALUES ('$nombres', '$apellidos', '$email', '$password', 'cliente', 0, '$token')");
        if($res) {
            set_mensaje('registro');
            redirect("/auth/register");
        }
    }

?>