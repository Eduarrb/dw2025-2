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

            // php -S localhost:3000
            $nombre = "Juan";
            $num = 45.5;
    
            $array = [1, 5453, "Hola", false, 0];

            // print_r($array[2]);
            // var_dump($array);


            // ARRAY ASOCIATIVO
            $arrayAsso = [
                // key - value pair
                "nombre" => "Juan",
                "edad" => 30,
                "apellido" => "Pérez"
            ];
            // var_dump($arrayAsso);
            // echo $arrayAsso["nombre"];

            // FUNCIONES
            function saludar ($assoc) {
                return "Hola " . $assoc["nombre"];
            }

            $nombre2 = saludar($arrayAsso);
            var_dump($nombre2);

            if ($num<50) {
                echo "El número es menor que 50";
            } else {
                echo "El número es mayor o igual que 50";
            }


            echo "<br>";
            for ($i = 0; $i < count($array); $i++) {
                echo $array[$i]."<br>";
            }
        ?>
    </pre>
    <script>
        document.captureEvents()
        "hola"+"mundo"
        const celular = {
            marca: "Samsung",
            modelo: "A50"
        }
    </script>
</body>
</html>