<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hola Mundo en PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    $atributos = ["Aitor", "Garcia", "agj0034@gmail.com"];
    foreach ($atributos as $atributo) {
    echo "<h1>$atributo</h1>";
}
    ?>
    
</body>
</html>

