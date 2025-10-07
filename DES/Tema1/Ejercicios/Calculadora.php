<?php

function suma($a, $b) {
    return $a + $b;
}

function isPar($num) {
    return $num % 2 === 0;
}

function factorial($n): int {
    if ($n <= 1){
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}


$operacion = $argv[1];

switch ($operacion) {
    case 'suma':
        if ($argc < 4) {
            echo "Para la suma necesitas dos números.\n";
            exit(1);
        }
        $num1 = (int)$argv[2];
        $num2 = (int)$argv[3];
        echo "La suma de $num1 y $num2 es: " . suma($num1, $num2) . "\n";
        break;

    case 'par':
        $num1 = (int)$argv[2];
        echo "El número $num1 es " . (isPar($num1) ? "par" : "impar") . "\n";
        break;

    case 'factorial':
        $num1 = (int)$argv[2];
        echo "El factorial de $num1 es: " . factorial($num1) . "\n";
        break;

    default:
        echo "Operación no reconocida. Usa 'suma', 'par' o 'factorial'.\n";
        break;

}






