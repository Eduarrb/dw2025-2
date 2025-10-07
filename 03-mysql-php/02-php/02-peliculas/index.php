<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeliBuster</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center bg-primary text-white pt-5 pb-5">Bienvenido(a) a PeliBuster</h1>
    <section class="container">
        <div class="row py-4">
            <a href="agregar.php" class="btn btn-success mr-1">Agregar Pelicula</a>
            <a href="#" class="btn btn-info">Directores</a>
        </div>
        <?php include 'db.php'; ?>
        <?php
            $query = "SELECT * FROM peliculas a INNER JOIN directores b ON a.peli_dire_id = b.dire_id";
            $respuesta = mysqli_query($conexion, $query);
        ?>
        <div class="row">
            <?php while ($fila = mysqli_fetch_assoc($respuesta)) : ?>
                <article class="col-md-3 mb-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSABTbUuOKVXFaxFaLZ7R6LTsOYYSbjAQXKHQ&s" alt="Matrix" style="width: 100%;">
                    <h4>
                        <?php echo $fila['peli_nombre']; ?>
                    </h4>
                    <div>
                        <strong>Director: </strong> <?php echo $fila['dire_nombres'] . " " . $fila['dire_apellidos']; ?>
                    </div>
                    <div>
                        <strong>Rating: </strong> <?php echo $fila['peli_restricciones']; ?>
                    </div>
                    <div>
                        <a href="" class="btn btn-warning">editar</a>
                        <a href="" class="btn btn-danger">eliminar</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </section>
</body>
</html>
