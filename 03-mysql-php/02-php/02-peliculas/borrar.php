<?php 
    include 'db.php'; 
    ob_start();

    $id = $_GET['id'];
    $query = "DELETE FROM peliculas WHERE peli_id = $id";
    $res = mysqli_query($conexion, $query);
    if($res) {
        header("Location: ./");
    }
?>