<?php
// Función para validar la contraseña
function validar_contrasena($contrasena, &$errores) {
    $errores = "";

    if (strlen($contrasena) < 8) {
        $errores .= "Debe tener al menos 8 caracteres. ";
    }
    if (!preg_match('/[a-z]/', $contrasena)) {
        $errores .= "Debe contener al menos una letra minúscula. ";
    }
    if (!preg_match('/[A-Z]/', $contrasena)) {
        $errores .= "Debe contener al menos una letra mayúscula. ";
    }
    if (!preg_match('/\d/', $contrasena)) {
        $errores .= "Debe contener al menos un número. ";
    }

    return empty($errores);
}

$contrasena = "Ejeooo";
if (validar_contrasena($contrasena, $errores)) {
    echo "Contraseña válida";
} else {
    echo "Contraseña inválida: $errores";
}
?>

