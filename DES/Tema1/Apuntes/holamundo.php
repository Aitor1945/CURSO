<?php
echo "Hola Mundo" . "\n";
$any_string = "Cadena de texto" . "\n";
echo $any_string;
$nombre_string = "Aitor";
$Apellidos_string = "Garcia";
echo "Mi Nombre es " . $nombre_string . " " . $Apellidos_string . "\n";
$salida = "Mi nombre es " . $nombre_string . " y mi apellido es " . $Apellidos_string . "\n";
echo $salida;
$any_int = 6;
$any_int2 = 6;
echo $any_int + $any_int2 . "\n";
$any_float = 3.4;
$any_bool = true;
//ARRAY
$array = [$any_bool, $any_int, $any_float];
print_r($array);
echo $array[0] . "\n";
echo gettype($array[1]) . "\n";
array_push($array, $nombre_string);
print_r($array);
$my_dict = array("nombre" => $nombre_string, "apellidos" => $Apellidos_string);
print_r($my_dict);
function esBisiesto($year) {
        return ($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0));
    }
if (esBisiesto(2020)) {
    echo "El valor es true\n";
} else {
    echo "El valor es false\n";
}

$edad = 78;
if ($edad >= 0 && $edad < 18) {
    echo "Eres menor de edad\n";
} elseif ($edad >= 18 && $edad < 30) {
    echo "Tienes entre 18 y 30 años\n";
} elseif ($edad >= 30 && $edad < 60) {
    echo "Tienes entre 30 y 60 años\n";
} else {
    echo "Te vas a morir pronto\n";
}

$edad = 10;
switch ($edad) {
    case ($edad >= 0 && $edad < 18):
        echo "Eres menor de edad\n";
        break;
    case ($edad >= 18 && $edad < 30):
        echo "Tienes entre 18 y 30 años\n";
        break;
    case ($edad >= 30 && $edad < 60):
        echo "Tienes entre 30 y 60 años\n";
        break;
    default:
        echo "Te vas a morir pronto\n";
        break;
}

$contador = 0;
while ($contador <= 127) {
    $contador++;
}
echo "Hay $contador númerpos entre 0 y 127\n";

$j = 0;
for ($i = 0; $i <= 10; $i=$i+3) {
    $j = $j+$i;
}
echo $j;
echo $i;


//comentario de una linea
/*comentario
de varias lineas
*/
?>