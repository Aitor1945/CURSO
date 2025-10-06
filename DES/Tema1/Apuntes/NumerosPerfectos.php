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



/*
Juego de la vida
Conceptos:
-tablero--> matriz
-celula viva o muerta--> 1 o 0
-Turnos
Reglas:
1. Soledad: Una celula viva con menos de dos vecinas vivas muere
2. Equilibrio: Una celula viva con dos o tres vecinas vivas sigue viva
3. Sobrepoblacion: Una celula viva con mas de tres vecinas vivas muere
4. Reproduccion: Una celula muerta con exactamente tres vecinas vivas nace
0010     0000     0000
0101     0010     0000
0000 --> 0000 --> 0000
0000     0000     0000

Primero crear el tablero los 0 y 1 van random es de nxn por ejemplo 5x5
Segundo ver los vecinos y aplicar las reglas
tercero repetir el proceso las veces que queramos por ejemplo 5 veces
Cuarto mostrar el tablero en cada turno
*/
echo "\nJuego de la vida\n";
$n = 5; // Tablero de 5x5
$turns = 5; // Número de iteraciones



?>