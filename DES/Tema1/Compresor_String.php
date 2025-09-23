<?php
// Función para comprimir una cadena
function compresorString($cadena) {
    $n = strlen($cadena); // Calcula la longitud de la cadena
    if ($n == 0) return ''; // Si la cadena está vacía, retorna vacío
    $res = ''; // Variable para guardar el resultado comprimido
    $count = 1; // Contador de repeticiones de cada carácter

    // Recorre la cadena desde el segundo carácter hasta el final
    for ($i = 1; $i < $n; $i++) {
        // Si el carácter actual es igual al anterior, incrementa el contador
        if ($cadena[$i] == $cadena[$i - 1]) {
            $count++;
        } else {
            // Si cambia el carácter, agrega el anterior y su contador al resultado
            $res .= $cadena[$i - 1] . $count;
            $count = 1; // Reinicia el contador para el nuevo carácter
        }
    }
    // Agrega el último carácter y su contador al resultado
    $res .= $cadena[$n - 1] . $count;
    return $res; // Devuelve la cadena comprimida
}

// Ejemplo de uso
$cadena = "aabbbcccc";
echo compresorString($cadena); // Salida: a2b3c4
?>