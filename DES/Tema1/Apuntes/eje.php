<?php
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

$longuitud = 5;   // tamaño del tablero (n x n)
$turnos = 5;      // mostrar tablero inicial + 4 generaciones
$tablero = [];    // array vacío (sintaxis corta)

// 1) Crear tablero aleatorio 5x5 con 0 y 1
for ($i = 0; $i < $longuitud; $i++) {
    $fila = [];
    for ($j = 0; $j < $longuitud; $j++) {
        $fila[$j] = rand(0, 1); // 0 = muerta, 1 = viva
    }
    $tablero[$i] = $fila;
}
print_r($tablero);
//--- IGNORE ---
// 2) Contar vecinos vivos (sin envoltura)
function contar_vecinos($tab, $fila, $col, $num_filas, $num_cols) {
    $cont = 0;
    for ($di = -1; $di <= 1; $di++) {
        for ($dj = -1; $dj <= 1; $dj++) {
            if ($di === 0 && $dj === 0) {
                continue; // Saltar la celda actual
            }
            $ni = $fila + $di;
            $nj = $col + $dj;

            // Validar que los índices están dentro de los límites
            if ($ni >= 0 && $ni < $num_filas && $nj >= 0 && $nj < $num_cols) {
                if ($tab[$ni][$nj] === 1) {
                    $cont++;
                }
            }
        }
    }
    return $cont;
}

// 3) Aplicar reglas y devolver nuevo tablero
function siguiente_turno($tab, $n) {
    $nuevo = [];
    for ($i = 0; $i < $n; $i++) {
        $nueva_fila = [];
        for ($j = 0; $j < $n; $j++) {
            $viva = ($tab[$i][$j] === 1);
            $vecinos = contar_vecinos($tab, $i, $j, $n);

            if ($viva) {
                // Celula viva
                if ($vecinos < 2) {
                    $nueva_fila[$j] = 0; // soledad
                } elseif ($vecinos === 2 || $vecinos === 3) {
                    $nueva_fila[$j] = 1; // equilibrio
                } else {
                    $nueva_fila[$j] = 0; // sobrepoblacion
                }
            } else {
                // Celula muerta
                if ($vecinos === 3) {
                    $nueva_fila[$j] = 1; // reproduccion
                } else {
                    $nueva_fila[$j] = 0;
                }
            }
        }
        $nuevo[$i] = $nueva_fila;
    }
    return $nuevo;
}

// 4) Imprimir tablero (usando "\n")
function imprimir_tablero($tab, $n) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo $tab[$i][$j] . " ";
        }
        echo "\n";
    }
}

// Ciclo principal: mostrar 5 tableros
for ($t = 1; $t <= $turnos; $t++) {
    echo "Turno " . $t . "\n";
    imprimir_tablero($tablero, $longuitud);
    echo "\n";
    if ($t < $turnos) {
        $tablero = siguiente_turno($tablero, $longuitud);
    }
}
?>