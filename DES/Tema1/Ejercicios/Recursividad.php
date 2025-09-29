<?php 
//Rescursividad es la capacidad que tiene una función de llamarse a sí misma para resolver un problema automáticamente.
/*
Dos piecas clave en la recursividad:
1. Caso base: Es la condición que detiene la recursión.
2. Llamada recursiva: Es la parte de la función donde se llama a sí misma con un argumento modificado.
*/
//Ejemplo de función recursiva que calcula el factorial de un número


function factorial($n): int {
    if ($n <= 1){
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$numero = 5;
$resultado = factorial($numero);
echo "El factorial de $numero es $resultado." . "\n";


function frigo($n): int {
   if ($n < 2) {
      return $n;
    } else {
        return frigo($n - 1) + frigo($n - 2);
    }
}

$numero = 3;
$resultado = frigo($numero);
echo "El número Frigo en la posición $numero es $resultado." . "\n";

//forma recursiva devuelva la suma de sus digitos intdiv()

function guapo ($n): int {
    if ($n < 10) {
        return $n;
    } else {
        return ( $n % 10 ) + guapo(intdiv($n, 10) );
    }
    }

$numero = 123;
$resultado = guapo($numero);
echo "La suma de los digitos de $numero es $resultado." . "\n";


?>