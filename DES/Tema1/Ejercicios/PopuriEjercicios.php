<?php
/*
Hacer tres funciones 
mediaTemperaturas($temp)
temperaturaMinima($temp)
diasCalurosos($temp) = "Temperaturas > 20"
crear archivo con eso que sea temp.txt
*/

$temp = [14,17,18,20,25,23,16];

/*
Hacer cuatro funciones
stockTotal($productos)
productoAgotados($productos)
productoMasStock($productos)
reponer($productos, $producto, $cantidad)
crear un archivo productos.txt con eso
*/

$productos = [
    "Teclados" => 20,
    "Ratones" => 3,
    "Monitor"=> 7,
    "Impresoras" => 0,
    "Portatiles" => 0,
];

/*
password_checker.php
php password_checker.php Password1
Funciones:
tieneLongitud($pass) >= 8 --> true/false
tieneMayusculas($pass) --> true/false
tieneMinusculas($pass) --> true/false
tieneNumeros($pass) --> true/false
tieneSimbolos($pass) --> true/false
esFuerte($pass) --> es debil si cumple 0 o 1, media si cumple 2 o 4, fuerte si cumple 5

crear un archivo recomendaciones.txt con eso
Contraseña:
Fuerza:
Recomendaciones:(Añadir simbolos, añadir numeros, etc)
Que sea con fopen("recomendaciones.txt", "a")
*/

/*
cajero.php
a centimos 
si tengo 12,35 heuros lo paso a 1235 centimos
php cajero.php 43,30
Funciones:
cambio para 43.30
2x20 €
1x5€
1x2€
1x20 centimos
1x10 centimos
aCentimos($euros) --> 1235
desgloseCambio($cantidad, $precio) valor centimos --> cantidad
validarDenominaciones($denominaciones, $cantidad) es array de emteros y ordena de mayor a menor
mostrarDesglose($desglose) imprime el desglose
verificarCambioExacto($cantidad, $precio) true(se puede exacto)/false 
crear un archivo con eso que sea cambio.txt
*/

$denominaciones = [50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5, 2, 1];

?>