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
    $productos = [ ["nombre" => "Camiseta", "precio" => 19.99,],
      ["nombre"=> "LG", "precio"=> 200.00],
      ["nombre"=> "PC", "precio"=> 599.99],
      ["nombre"=> "Tablet", "precio"=> 149.99],
    ] ;
        echo "<table border='1'>";
        echo "<th>Nombre</th>" . "<th>Precio</th>";
    foreach ($productos as $producto) {
        echo "<tr>" . "<td>" . $producto["nombre"] . "</td>" . "<td>" . $producto["precio"] . "€</td>" . "</tr>";
    }
     ?>

</body>
</html>