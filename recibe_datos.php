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
        $pagina = isset($_POST["pagina_actual"]) ? $_POST["pagina_actual"] : "";
        // Con el basename solo sacamos el nombre del fichero, no toda la URL
        $name_pagina = isset($_POST["pagina_actual"]) ? basename($_POST["pagina_actual"]) : "";
        $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
        $apellidos = isset($_POST["apellidos"]) ? $_POST["apellidos"] : "";
        $telefono = isset($_POST["phone"]) ? $_POST["phone"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";
        $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : "";
        $edad = isset($_POST['edad']) ? $_POST['edad'] : "";
        $pais = isset($_POST['pais']) ? $_POST['pais'] : "";
        $asignaturas_array = array_keys($_POST, "on");
        $asignaturas = arraystring($asignaturas_array);
        $errores = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fichero1 = $_FILES['fichero1'];
            $fichero2 = $_FILES['fichero2'];
            $ruta = 'ficheros/';
            $nombre_fichero1 = $ruta . basename($fichero1['name']);
            $nombre_fichero2 = $ruta . basename($fichero2['name']);
            $extension_fichero1 = strtolower(pathinfo($nombre_fichero1, PATHINFO_EXTENSION));
            $extension_fichero2 = strtolower(pathinfo($nombre_fichero2, PATHINFO_EXTENSION));
            $contador_fichero1 = 0;
            $contador_fichero2 = 0;
            if (file_exists($nombre_fichero1)) {
                while (file_exists($nombre_fichero1)) {
                    $contador_fichero1++;
                    $nombre_fichero1 = $ruta . pathinfo($fichero1['name'], PATHINFO_FILENAME) . '_' . $contador_fichero1 . '.' . $extension_fichero1;
                }
            }
            if (file_exists($nombre_fichero2)) {
                while (file_exists($nombre_fichero2)) {
                    $contador_fichero2++;
                    $nombre_fichero2 = $ruta . pathinfo($fichero2['name'], PATHINFO_FILENAME) . '_' . $contador_fichero2 . '.' . $extension_fichero2;
                }
            }
            move_uploaded_file($fichero1['tmp_name'], $nombre_fichero1);
            move_uploaded_file($fichero2['tmp_name'], $nombre_fichero2);
        }

        // Comprobamos si los datos vienen de un formulario u otro para hacer las validaciones correspondientes
        switch ($name_pagina) {
            case "formulario1.php":
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
                break;

            case "formulario2.php":
                $errorEdad = validarEdad($edad);
                if (!empty($errorEdad)) {
                    $errores .= $errorEdad . "<br>";
                }

                $errorPais = validarPais($pais);
                if (!empty($errorPais)) {
                    $errores .= $errorPais . "<br>";
                }

                $errorAsignaturas = validarAsignaturas($asignaturas_array);
                if (!empty($errorAsignaturas)) {
                    $errores .= $errorAsignaturas . "<br>";
                }

                if (empty($errores)) {
                    echo "Sexo: " . htmlspecialchars($sexo) . "<br>";
                    echo "Edad: " . htmlspecialchars($edad) . "<br>";
                    echo "País: " . htmlspecialchars($pais) . "<br>";
                    echo "Asignaturas: " . htmlspecialchars($asignaturas) . "<br>";
                } else {
                    echo "Se encontraron errores en el formulario:<br>";
                    echo $errores;
                }

                break;
        }

        function arraystring($asignaturas)
        {
            $asignaturas_sting = implode(",", $asignaturas);
            return $asignaturas_sting;
        }


        ?>
    </div>

    <div class="d-flex justify-content-center container mt-5">
        <br>
        <a href="<?php echo $pagina; ?>" class="btn btn-secondary">Volver al formulario</a>
    </div>
</body>