<?php
$json = '{
    "nombre": "Juan",
    "edad": 30,
    "ciudad": "Madrid",
    "hobbies": ["futbol", "musica", "cine"]
}';


$data = json_decode($json, true);
echo $data['nombre']; 


$array = ["nombre" => "Ana", "edad" => 25, "ciudad" => "Barcelona"];
$json2 = json_encode($array, JSON_PRETTY_PRINT);
$archivo = fopen("archivo.txt","a+");
fwrite($archivo, "\n" . $json2);
fclose($archivo);
?>