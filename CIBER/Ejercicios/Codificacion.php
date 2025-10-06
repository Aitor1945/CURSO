<?php
function codificarTexto($texto) {
$abecedario = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
strlen($texto);
$texto = strtolower($texto);
for ($i = 0; $i < strlen($texto); $i++) {
    for ($j = 0; $j < count($abecedario) -1 ; $j++) {
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
        for ($j = 0; $j < count($abecedario) +1 ; $j++) {
            if ($texto[$i] == $abecedario[$j]) {
               $texto[$i] = $abecedario[$j-2];
               break;
            }
        }
    }
    return $texto;

}

$texto = "Aitoz";
echo codificarTexto($texto) . "\n";
$texto = codificarTexto($texto);
echo decodificarTexto($texto);
?>

<?php
//Cifrado cesar maximo de 26 desplazaminetos y minimo de uno 
$abecedario = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
$indice = 27;
$indice_mod = $indice % count($abecedario);
echo $abecedario[$indice_mod] . "\n"; 


/*Cifra el Mesaje Buenos dias con desplazamineto 5 el 26 es un espacio / Descifra el mensaje FRZD sabuiendo que el desplazamineto 3 
Descifra el mensaje OLSSVDVYSK no sabemos el desplazamineto ni si hemos utilizado el modulo con el espacio o sin el espacio 
*/

//1
$abecedario = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
$desplazamiento = 5;
$mensaje = "Buenos dias";
$mensaje = strtolower($mensaje); 
$mensaje_cifrado = "";

for ($i=0; $i<strlen($mensaje); $i++) {
    $letra = $mensaje[$i];
    $indice = array_search($letra, $abecedario); 
    if ($indice !== false) {
        $nuevo_indice = ($indice + $desplazamiento) % count($abecedario);
        $mensaje_cifrado .= $abecedario[$nuevo_indice];
    } else {
        $mensaje_cifrado .= $letra;
    }
}

echo "Mensaje cifrado: ".$mensaje_cifrado . "\n";
//2
$abecedario = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"," "];
$desplazamiento = 3;
$mensaje = "FRZD";
$mensaje = strtolower($mensaje); 
$mensaje_cifrado = "";

for ($i=0; $i<strlen($mensaje); $i++) {
    $letra = $mensaje[$i];
    $indice = array_search($letra, $abecedario); 
    if ($indice !== false) {
        $nuevo_indice = ($indice - $desplazamiento) % count($abecedario);
        $mensaje_cifrado .= $abecedario[$nuevo_indice];
    } else {
        $mensaje_cifrado .= $letra;
    }
}

echo "Mensaje descifrado: ".$mensaje_cifrado . "\n";
//3


/*Cifrado por sustitucion 
1) A-Z B-Y y asi cifrar palabra Seguiridad
2) Hola Buenos Dias 
   ADIOSADIOSADIOSA se le suma la posicion del de abajo
   HRT-------------
Descifrar RIJVSUYVJN la clave es (KEY) modulo 26

Cifrado por trasposicion de ATAQUEJESUSIANOCIFRADO


   */


?>