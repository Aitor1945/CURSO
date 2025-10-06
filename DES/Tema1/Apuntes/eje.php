<?php
/* Juego de la Vida simple y visible */

// Tamaño del tablero y número de turnos
$n = 5; // Tablero de 5x5
$turns = 5; // Número de iteraciones

// Crear el tablero inicial con valores aleatorios 0 y 1
$board = [];
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $board[$i][$j] = rand(0, 1);
    }
}

// Función para imprimir el tablero
function printBoard($board) {
    foreach ($board as $row) {
        echo implode(" ", $row) . "\n";
    }
}

// Función para contar los vecinos vivos de una celda
function countNeighbors($board, $x, $y, $n) {
    $count = 0;
    for ($i = max(0, $x - 1); $i <= min($n - 1, $x + 1); $i++) {
        for ($j = max(0, $y - 1); $j <= min($n - 1, $y + 1); $j++) {
            if ($i == $x && $j == $y) continue;
            if ($board[$i][$j] === 1) $count++;
        }
    }
    return $count;
}

// Mostrar el tablero inicial
echo "Turno 0:\n";
printBoard($board);
echo "\n";

// Ejecutar el juego por el número de turnos definidos
for ($turn = 1; $turn <= $turns; $turn++) {
    $newBoard = [];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $neighbors = countNeighbors($board, $i, $j, $n);
            
            // Reglas del juego de la vida
            if ($board[$i][$j] === 1) { 
                // Celula viva
                if ($neighbors < 2 || $neighbors > 3) {
                    $newBoard[$i][$j] = 0; // Muere por soledad o sobrepoblación
                } else {
                    $newBoard[$i][$j] = 1; // Sigue viva
                }
            } else { 
                // Celula muerta
                $newBoard[$i][$j] = ($neighbors === 3) ? 1 : 0; // Reproducción
            }
        }
    }
    echo "Turno $turn:\n";
    printBoard($newBoard);
    echo "\n";
    
    // Actualizar el tablero
    $board = $newBoard;
}


?>
