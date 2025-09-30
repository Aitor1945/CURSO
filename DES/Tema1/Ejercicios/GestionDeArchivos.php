<?php
$archivo = fopen("archivo.txt" ,"w");
function matrizes($n) {
    $texto = "";

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $texto .= rand(0, 1) . " ";
        }
        $texto .= "\n"; 
    }

    return $texto; 
}
$numero = 5;
$contenido = matrizes($numero);
if ($archivo ) {
fwrite($archivo, $contenido);
fclose($archivo);
echo "Archivo creado correctamente";
} else {
    echo "No existe el archivo";
}
?>
