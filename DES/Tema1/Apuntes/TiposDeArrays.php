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
    echo $atributo . "<br>";
}
    for($i = 0; $i < count($atributos); $i++) {
        echo $atributos[$i] . "<br>";
    }

//array asociativo
    $atributosAsociativo = [
        "nombre" => "Aitor",
        "apellido" => "Garcia",
        "email" => "agj0034@gmail.com"
    ];
    foreach ($atributosAsociativo as $clave => $valor) {
        echo $clave . ": " . $valor . "<br>";
    }
    //modificar los valores del array
    $numeros = [1, 2, 3, 4, 5];
    foreach ($numeros as &$numero){
        $numero *= 2;
    }
    print_r($numeros);
    ?>

</body>
</html>

