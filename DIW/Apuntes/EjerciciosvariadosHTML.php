<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo en PHP</title>
</head>
<body>          
    <?php
    $saludo = "Hola Mundo";
    $nombre = "Aitor";
        echo "<h1>$saludo</h1>";
        echo "<h2>Mi nombre es $nombre</h2>";

        //Array de frutas
    $compra = ["peras", "manzanas", "platanos", "naranjas", "kiwis"];
        echo "<ol>";
        foreach ($compra as $fruta) {
            echo "<li>$fruta</li>";
        }
        echo "</ol>";
     ?>

</body>
</html>