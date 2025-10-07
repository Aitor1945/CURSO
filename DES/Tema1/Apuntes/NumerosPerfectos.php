<?php
//Numeros perfectos

function CellPerfecto($num) {
    $suma = 0;
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $suma += $i;
        }
    }
    return $suma == $num;

}

$num = 28;
echo CellPerfecto($num) ? "Es perfecto\n" : "No es perfecto\n";

// Matriz rellenar con 0 y 1 donde sea par se pone 1 y donde sea impar se pone 0 que sea n-n si eso se hace por borde mas cercano 
/*
0000000
0111110
0100010
0101010
0100010
0111110
0000000
*/


function matriz($n) {
    $resultado = "";
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $distancia = min($i, $j, $n - 1 - $i, $n - 1 - $j);
            $valor = ($distancia % 2 == 0) ? '0 ' : '1 ';
            $resultado .= $valor;
        }
        $resultado .= "\n";
    }

    return $resultado;
}

$n = 7;
echo matriz($n);


/*
hacer esto con recursividad
*
**
***
****
*****
*/

function triangulo($simbolo = '*', $fila = 1) {       
    if ($fila > 5) return '';
    return str_repeat($simbolo, $fila) . "\n" . triangulo($simbolo, $fila + 1);
}

echo triangulo();


?>