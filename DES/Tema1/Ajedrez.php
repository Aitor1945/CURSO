<?php
$n = 45;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if (($i + $j) % 2 == 0) {
            echo "⬜ ";
        } else {
            echo "⬛ ";
        }

    }
    echo "<br>";
}

?>