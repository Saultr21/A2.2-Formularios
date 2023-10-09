<?php
function validarNombre($nombre) {
    if (empty($nombre)) {
        return "El campo Nombre no puede estar vacío.";
    }
    return "";
}

function validarApellidos($apellidos) {
    if (empty($apellidos)) {
        return "El campo Apellidos no puede estar vacío.";
    }
    return "";
}

function validarTelefono($telefono) {
    if (!preg_match("/^\d{9}$/", $telefono)) {
        return "El campo Teléfono debe tener 9 dígitos numéricos.";
    }
    return "";
}

function validarEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "El campo Email debe ser una dirección de correo válida.";
    }
    return "";
}

function validarPassword($password) {
    if (strlen($password) < 8) {
        return "La contraseña debe tener al menos 8 caracteres.";
    }
    return "";
}
?>
