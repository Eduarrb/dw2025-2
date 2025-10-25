<?php require_once "../../resources/config.php"; ?>

<?php include VIEW_AUTH . "head.php"; ?>

<?php
    if($_SERVER['REQUEST_URI'] === "/auth/register") {
        include VIEW_AUTH . "register.php";
    }

    if($_SERVER['REQUEST_URI'] === "/auth/login") {
        include VIEW_AUTH . "login.php";
    }

    if($_SERVER['REQUEST_URI'] === "/auth/forgot") {
        include VIEW_AUTH . "forgot.php";
    }
?>

<?php include VIEW_AUTH . "footer.php"; ?>
			