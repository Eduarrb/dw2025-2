<?php include 'db.php'; ?>
<?php ob_start(); ?>
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
            <a href="./" class="btn btn-success mr-1">Regresar</a>
            <a href="#" class="btn btn-info">Directores</a>
        </div>
        <div class="row justify-content-center">
            <h4 class="text-center col-md-12">
                Ingrese los datos de la película
            </h4>
            <form class="col-md-6 mt-4" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre de la película</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="nombre" 
                        name="peli_nombre"
                        placeholder="Nombre de la película"
                    >
                </div>
                <div class="form-group">
                    <label for="genero">Género</label>
                    <input type="text" class="form-control" id="genero" name="peli_genero" placeholder="Género de la película">
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha de estreno</label>
                    <input type="date" class="form-control" id="fecha" name="peli_anio" placeholder="Fecha de estreno de la película">
                </div>
                <div class="form-group">
                    <label for="restricciones">Restricciones</label>
                    <input type="text" class="form-control" id="restricciones" name="peli_restricciones" placeholder="Restricciones de la película">
                </div>
                <pre>
                    <?php
                        $query = "SELECT dire_id, CONCAT(dire_nombres, ' ', dire_apellidos) AS director FROM directores";
                        $res = mysqli_query($conexion, $query);
                    ?>
                </pre>
                <div class="form-group">
                    <label for="director">Selecciona al director</label>
                    <select name="peli_dire_id" id="director" class="form-control">
                        <option value="" disabled selected>-- Seleccione director --</option>
                        <?php while($fila = mysqli_fetch_assoc($res)): ?>
                            <option value="<?php echo $fila['dire_id']; ?>">
                                <?php echo $fila['director']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Guardar Película" class="btn btn-primary" name="guardar">
                </div>
            </form>
            <pre>
                <?php
                    if(isset($_POST['guardar'])) {
                        $peli_nombre = $_POST['peli_nombre'];
                        $peli_genero = $_POST['peli_genero'];
                        $peli_anio = $_POST['peli_anio'];
                        $peli_restricciones = $_POST['peli_restricciones'];
                        $peli_dire_id = $_POST['peli_dire_id'];

                        $query = "INSERT INTO peliculas (peli_nombre, peli_genero, peli_anio, peli_restricciones, peli_dire_id) 
                            VALUES ('$peli_nombre', '$peli_genero', '$peli_anio', '$peli_restricciones', $peli_dire_id)";
                        
                        $res = mysqli_query($conexion, $query);

                        // var_dump($res);
                        if($res) {
                            header("Location: ./");
                        }
                    }
                ?>
            </pre>
        </div>
    </section>
</body>
</html>
