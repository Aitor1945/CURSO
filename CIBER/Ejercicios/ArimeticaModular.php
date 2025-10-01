<?php
function mod($a, $n) {
    $res = $a % $n;
    return ($res < 0) ? $res + $n : $res;
}

$a = 17;
$b = 7;
$n = 5;

echo "17 mod 5 = " . mod($a, $n) . "\n";
echo "7 mod 5 = " . mod($b, $n) . "\n";
?>
