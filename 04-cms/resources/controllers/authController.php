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
        $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 13));
        $res = query("INSERT INTO usuarios (nombres, apellidos, email, password, rol, estado, token) VALUES ('$nombres', '$apellidos', '$email', '$password', 'cliente', 0, '$token')");
        $msj = "Por favor activa tu cuenta accediendo al siguiente <a href='http://localhost:3000/auth/activate.php?email=$email&token=$token'>LINK</a>";
        sendEmail($email, 'Activar Cuenta', $msj);
        if($res) {
            set_mensaje('registerOk');
            redirect("/auth/register");
        }
    }

    function post_activateUser() {
        if(isset($_GET['email']) && isset($_GET['token'])) {
            $email = escape($_GET['email']);
            $token = escape($_GET['token']);

            $query = query("SELECT id FROM usuarios WHERE email = '$email' AND token = '$token'");

            if(mysqli_num_rows($query) == 1) {
                $user = arrayAssoc($query);
                $user_id = $user['id'];
                $res = query("UPDATE usuarios SET estado = 1, token = '' WHERE id = $user_id");

                if($res) {
                    set_mensaje('activacionOk');
                    redirect('/auth/login');
                } else {
                    set_mensaje('validacionError');
                    redirect("/auth/register");
                }
            }
        }
    }

    function validarUserLogin() {
        $errores = [];
        $data = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = escape($_POST['email']);
            $password = escape($_POST['password']);

            if(strlen($email) <= 0) {
                $errores['email'] = "El campo email no debe estar vacio";
            }
            if(strlen($password) <= 0) {
                $errores['password'] = 'La contraseña no debe estar vacia';
            }

            if(!empty($errores)) {
                $data['email'] = $email;
                return [$errores, $data];
            }
            else {
                if(post_loginUser($email, $password)) {
                    redirect("../");
                }
                else {
                    setSwal('Error', 'El usuario o contraseña son incorrectos', 'error');
                    redirect('/auth/login');
                }
            }
        }
    }

    function post_loginUser($email, $pass) {
        $query = query("SELECT * FROM usuarios WHERE email = '$email' AND estado = 1");
        if(mysqli_num_rows($query) == 1) {
            $user = arrayAssoc($query);
            $id = $user['id'];
            $nombres = $user['nombres'];
            $apellidos = $user['apellidos'];
            $password = $user['password'];
            $rol = $user['rol'];

            if(password_verify($pass, $password)){
                $_SESSION['id'] = $id;
                $_SESSION['nombres'] = $nombres;
                $_SESSION['apellidos'] = $apellidos;
                $_SESSION['rol'] = $rol;

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
?>