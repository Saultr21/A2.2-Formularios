
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
    // Con el basename solo sacamos el nombre del fichero, no toda la URL
    $name_pagina = isset($_GET["pagina_actual"]) ? basename($_GET["pagina_actual"]) : "";
    $nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "";
    $apellidos = isset($_GET["apellidos"]) ? $_GET["apellidos"] : "";
    $telefono = isset($_GET["phone"]) ? $_GET["phone"] : "";
    $email = isset($_GET["email"]) ? $_GET["email"] : "";
    $password = isset($_GET["password"]) ? $_GET["password"] : "";
    $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : "";
    $edad = isset($_GET['edad']) ? $_GET['edad'] : "";
    $pais = isset($_GET['pais']) ? $_GET['pais'] : "";
    $asignaturas_array = array_keys($_GET, "on");
    $asignaturas = arraystring($asignaturas_array);
    $errores = "";

    // Comprobamos si los datos vienen de un formulario u otro para hacer las validaciones correspondientes
    switch($name_pagina) {
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
            } else{
                echo "Se encontraron errores en el formulario:<br>";
                echo $errores;
            }
            break;
            
        case "formulario2.php":
            $errorEdad = validarEdad($edad);
            if (!empty($errorEdad)) {
                $errores .=$errorEdad . "<br>";
            }
        
            $errorPais = validarPais($pais);
            if (!empty($errorPais)) {
                $errores .=$errorPais . "<br>";
            }
        
            $errorAsignaturas = validarAsignaturas($asignaturas_array);
            if (!empty($errorAsignaturas)) {
                $errores .=$errorAsignaturas . "<br>";
            }

            if (empty($errores)){
                echo "Sexo: " . htmlspecialchars($sexo) . "<br>";
                echo "Edad: " . htmlspecialchars($edad) . "<br>";
                echo "País: " . htmlspecialchars($pais) . "<br>";
                echo "Asignaturas: " . htmlspecialchars($asignaturas) . "<br>";
            } 
            else{
                echo "Se encontraron errores en el formulario:<br>";
                echo $errores;
            }

            $dir_subida = '../A2.2-Formularios/Formularios/';
            foreach ($_FILES["archivo"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["archivo"]["tmp_name"][$key];
                    // basename() may prevent filesystem traversal attacks;
                    // further validation/sanitation of the filename may be appropriate
                    $name = basename($_FILES["archivo"]["name"][$key]);
                    move_uploaded_file($tmp_name, "$dir_subida/$name");
                }
            }
    
            echo 'Más información de depuración:';
            print_r($_FILES);
    
            print "</pre>";
            
            break;
        

        }

        function arraystring($asignaturas){
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
