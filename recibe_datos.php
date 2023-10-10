
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Recibe datos</title>
</head>
<body class="container">
    <div class="d-flex justify-content-center container formulario mt-5">
    <?php

    // Fichero recibe datos y valida

    // Recogemos los datos del formulario
    include "funciones_validacion.php";
    $pagina = isset($_GET["pagina_actual"]) ? $_GET["pagina_actual"] : "";
    $nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "";
    $apellidos = isset($_GET["apellidos"]) ? $_GET["apellidos"] : "";
    $telefono = isset($_GET["phone"]) ? $_GET["phone"] : "";
    $email = isset($_GET["email"]) ? $_GET["email"] : "";
    $password = isset($_GET["password"]) ? $_GET["password"] : "";
    $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : "";
    $edad = isset($_GET['edad']) ? $_GET['edad'] : "";
    $pais = isset($_GET['pais']) ? $_GET['pais'] : "";
    $asignaturas = array_keys($_GET, "on");
    $errores = "";

    $errorNombre = validarNombre($nombre);
    if (!empty($errorNombre)) {
        $errores .= $errorNombre . "<br>";
    }

    $errorApellidos = validarApellidos($apellidos);
    if (!empty($errorApellidos)) {
        $errores .= $errorApellidos . "<br>";
    }

    $errorTelefono = validarTelefono($telefono);
    if (!empty($errorTelefono)) {
        $errores .= $errorTelefono . "<br>";
    }

    $errorEmail = validarEmail($email);
    if (!empty($errorEmail)) {
        $errores .= $errorEmail . "<br>";
    }

    $errorPassword = validarPassword($password);
    if (!empty($errorPassword)) {
        $errores .= $errorPassword . "<br>";
    }

    $errorEdad = validarEdad($edad);
    if (!empty($errorEdad)) {
        $errores .=$errorEdad . "<br>";
    }

    $errorPais = validarPais($pais);
    if (!empty($errorPais)) {
        $errores .=$errorPais . "<br>";
    }

    $errorAsignaturas = validarAsignaturas($asignaturas);
    if (!empty($errorAsignaturas)) {
        $errores .=$errorAsignaturas . "<br>";
    }




    // Verifica si hay errores
    if (empty($errores)) {
        echo "Datos recibidos correctamente:<br>";
        echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
        echo "Apellidos: " . htmlspecialchars($apellidos) . "<br>";
        echo "Teléfono: " . htmlspecialchars($telefono) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
    } else {
        echo "Se encontraron errores en el formulario:<br>";
        echo $errores;
    }
    ?>
    </div>
    
    <!-- Coloca el botón de volver aquí, debajo de los mensajes de error o datos -->
    <div class="d-flex justify-content-center container mt-5">
        <br>
        <a href="<?php echo $pagina; ?>" class="btn btn-secondary">Volver al formulario</a>
    </div>
</body>
