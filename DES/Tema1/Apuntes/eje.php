<?php
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
function contar_vecinos($tab, $fila, $col, $n) {
    $cont = 0;
    for ($di = -1; $di <= 1; $di++) {
        for ($dj = -1; $dj <= 1; $dj++) {
            // Si di=0 y dj=0 estamos en la misma celda saltar
            if ($di === 0 && $dj === 0) {
                continue;
            }
            $ni = $fila + $di;
            $nj = $col + $dj;
            // Comprobar que la posición vecina está dentro del tablero
            if ($ni >= 0 && $ni < $n && $nj >= 0 && $nj < $n) {
                if ($tab[$ni][$nj] === 1) {
                    $cont = $cont + 1;
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