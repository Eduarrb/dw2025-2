<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
</head>
<body>
    <h1>Bienvenido al curso de PHP</h1>

    <pre>
        <?php
            $nombre = "Juan";
            $num = 45.5;
    
            $array = [1, 5453, "Hola", true, [30, 'Adiós']];

            // print_r($array);
            // var_dump($array);
            $arrayAsso = [
                "nombre" => "Juan",
                "edad" => 30,
                "apellido" => "Pérez"
            ];
            var_dump($arrayAsso);
            echo $arrayAsso["nombre"];
        ?>
    </pre>
    <script>
        let nombre = "Juan"
        const edad = 30
        console.log(nombre, edad);
        const obj = {
            nombre: "Juan",
            edad: 30,
            array: [1, 5453, "Hola", true, [30, 'Adiós']]
        }
        const saludar = () => {
            console.log("Hola");
        }
        console.log(obj.nombre);
    </script>
</body>
</html>