<?php
// Función para validar la contraseña
function validar_contrasena($contrasena, &$errores) {
    $errores = "";

    if (strlen($contrasena) < 8) {
        $errores = "Debe tener al menos 8 caracteres";
    }
    elseif (!preg_match('/[a-z]/', $contrasena)) {
        $errores = "Debe contener al menos una letra minúscula";
    }
    elseif (!preg_match('/[A-Z]/', $contrasena)) {
        $errores = "Debe contener al menos una letra mayúscula";
    }
    elseif (!preg_match('/\d/', $contrasena)) {
        $errores = "Debe contener al menos un número";
    }

    return empty($errores);
}

$contrasena = "Ejemplooo";
if (validar_contrasena($contrasena, $errores)) {
    echo "Contraseña válida";
} else {
    echo "Contraseña inválida: $errores";
}


