<?php
function tablaMultiplicar($N) {
    echo "Tabla de multiplicar del $N";
    for ($i = 1; $i <= 10; $i++) {
        echo "$N x $i = " . ($N * $i) . "\n";
    }
}

$N = 10;
tablaMultiplicar($N);
?>