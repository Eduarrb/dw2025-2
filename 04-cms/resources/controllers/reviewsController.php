<?php
    function post_addReview() {
        if(isset($_POST['reviewAdd'])) {
            if(!isset($_SESSION['id'])) {
                redirect("/auth/login");
            } else {
                $user_id = $_SESSION['id'];
                $producto_id = escape($_GET['id']);
                $rating = escape($_POST['ratingValue']);
                $review = escape($_POST['review']);

                $res = query("SELECT * FROM reviews WHERE user_id = $user_id AND producto_id = $producto_id");
                if(mysqli_num_rows($res) == 1) {
                    setSwal('Error', 'Ya has agregado un comentario para este producto', 'error');
                    redirect("/producto?id=$producto_id");
                } else {
                    query("INSERT INTO reviews (user_id, producto_id, calificacion, comentario, fecha) VALUES ($user_id, $producto_id, $rating, '$review', NOW())");
                    setSwal('Comentario Agregado', 'Tu comentario ha sido agregado exitosamente', 'success');
                    redirect("/producto?id=$producto_id");
                }
                
            }
        }
    }

    function getComentarios($producto_id){
        $producto_id = escape($producto_id);
        $query = query("SELECT a.calificacion, a.comentario, a.fecha, b.nombres, b.apellidos FROM reviews a INNER JOIN usuarios b ON a.user_id = b.id WHERE a.producto_id = $producto_id ORDER BY a.fecha DESC");
        $res = mysqli_fetch_all($query, MYSQLI_ASSOC);
        echo json_encode($res);
    }
?>