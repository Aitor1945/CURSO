<?php

function sumar($a, $b) {
    return $num = $a + $b;
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

echo sumar(1,2) . "\n";
echo ispar(4) . "\n";
echo factorial(8);
?>