<?php
// Función para comprimir una cadena
function compresorString($input) {
    $n = strlen($input);
    if ($n == 0) return '';
    $res = '';
    $count = 1;
    for ($i = 1; $i < $n; $i++) {
        if ($input[$i] == $input[$i - 1]) {
            $count++;
        } else {
            // res .= concatena el carácter y su conteo
            $res .= $input[$i - 1] . $count;
            $count = 1;
        }
    }
    $res .= $input[$n - 1] . $count;
    return $res;
}

$input = "aaabbc";
echo compresorString($input); // Salida: a3b2c1
?>
