<?php

$array = [4, 8, 9, 10];
$max = $array[0];

for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] > $max) {
        $max = $array[$i];
    }
}

echo $max . "\n";


// con array asociativo
$arrayAsociativo = ["Juan" => 28, "Ana" => 13, "Luis" => 35];

$maxNombre = "";
$maxEdad = 0;

foreach ($arrayAsociativo as $key => $valor) {
    if ($valor > $maxEdad) {
        $maxEdad = $valor;
        $maxNombre = $key;
    }
}

echo "$maxNombre tiene " . "$maxEdad años." ;

?>