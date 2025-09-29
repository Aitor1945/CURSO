<?php
//Array indexado de colores y mediante la funcion in_array() saber si esta el color azul
$Colores = ["rojo", "verde", "azul", "amarillo"];
if (in_array("azul", $Colores)) {
    echo "El color azul está en el array.";
} else {
    echo "El color azul no está en el array.";
}
//Array indexado de colores y sin usar funciones queremos saber si esta el color azul
$Colores = ["rojo", "verde", "rojo", "amarillo"];
foreach ($Colores as $color) {
    if ($color === "azul") {
        echo "El color azul está en el array.";
        break;
    }
}if ($color !== "azul") {
    echo "El color azul no está en el array.";
}


//Array de numeros y otro de numeros pares vacio, rellenar el array de pares con los numeros pares del array de numeros
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numerosPares = [];
foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $numerosPares[] = $numero;
    }
}

echo "Numeros pares: ";
print_r($numerosPares);



//Modificar el array de numeros que en lugar de guardar los numeros pares gusrde los multiplos de 5
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numerosMultiplos = [];
foreach ($numeros as $numero) {
    if ($numero % 5 == 0) {
        $numerosMultiplos[] = $numero;
    }
}

echo "Numeros multiplos de 5: ";
print_r($numerosMultiplos);



//Dado el siguiente codigo, Imprime la suma de las edades y el promedio de las edades.
$edades = [10, 20, 21, 25];
$suma = 0;
$promedio = 0;  
foreach ($edades as $edad) {
    $suma += $edad;
}
echo "Suma de edades: " . $suma . "\n";
$promedio = $suma / count($edades);
echo "Promedio de edades: " . $promedio;

?>