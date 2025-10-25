<?php
    require_once "../../resources/config.php";

    if(!isset($_GET['email']) || !isset($_GET['token'])){
        set_mensaje('validacionError');
        redirect("/auth/register");
    } else {
        post_activateUser();
    }

?>