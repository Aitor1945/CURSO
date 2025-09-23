<?php
// Función para validar la contraseña
function validar_contrasena($contrasena) {
    $patron = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';
    return preg_match($patron, $contrasena) === 1;
}

$contrasena = "Ejemplo123";
if (validar_contrasena($contrasena)) {
    echo "Contraseña válida";
} else {
    echo "Contraseña inválida";
}
?>
