<?php
function codificarTexto($texto) {
$abecedario = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
strlen($texto);
$texto = strtolower($texto);
for ($i = 0; $i < strlen($texto); $i++) {
    for ($j = 0; $j < count($abecedario); $j++) {
        if ($texto[$i] == $abecedario[$j]) {
           $texto[$i] = $abecedario[$j+2];
           break;
        }
    }
}
return $texto;
}

function decodificarTexto($texto) {
    $abecedario = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    strlen($texto);
    $texto = strtolower($texto);
    for ($i = 0; $i < strlen($texto); $i++) {
        for ($j = 0; $j < count($abecedario); $j++) {
            if ($texto[$i] == $abecedario[$j]) {
               $texto[$i] = $abecedario[$j-2];
               break;
            }
        }
    }
    return $texto;

}

$texto = "Aitor";
echo codificarTexto($texto) . "\n";
$texto = codificarTexto($texto);
echo decodificarTexto($texto);
?>