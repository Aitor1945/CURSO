<?php
$longuitud = 7;
for ($i = 0; $i < $longuitud; $i++) {
    for ($j = 0; $j < $longuitud; $j++) {
        if ($i == 0 || $i == $longuitud - 1 || $j == 0 || $j == $longuitud - 1) {
            echo " O  ";
        } else {
            echo " X  ";
        }
    }
    echo "\n";
}
?>