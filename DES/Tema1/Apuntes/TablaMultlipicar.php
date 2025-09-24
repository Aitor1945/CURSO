<?php
function tablaMultiplicar($N) {
    echo "Tabla de multiplicar del $N" . "\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "$N x $i = " . ($N * $i) . "\n";
    }
}

$N = 20;
tablaMultiplicar($N);
?>