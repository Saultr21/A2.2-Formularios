<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Formulario 1</title>
</head>

<?php
$opciones_defecto = [];
$lines = file('valores.txt');
foreach ($lines as $line) {
    list($key, $value) = explode('=', trim($line));
    $opciones_defecto[$key] = $value;
}
?>

<body class="d-flex align-items-center">
    <div class="d-flex justify-content-center container formulario mt-5">
        <form class="form" action="recibe_datos.php" method="get" enctype="multipart/form-data">
            <p class="form-title">Formulario 1</p>
            <input type="hidden" name="pagina_actual" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input class="align-content-right form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" required value="<?php echo $opciones_defecto['nombre']; ?>">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input class="form-control" id="apellidos" name="apellidos" type="text" placeholder="Apellidos" required value="<?php echo $opciones_defecto['apellidos']; ?>">
            </div>
            <div class="form-group">
                <label for="phone">Teléfono:</label>
                <input class="form-control" id="phone" name="phone" type="text" placeholder="Número de telefono" required value="<?php echo $opciones_defecto['phone']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" id="email" name="email" type="email" placeholder="Correo" required value="<?php echo $opciones_defecto['email']; ?>">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" required value="<?php echo $opciones_defecto['password']; ?>">
            </div>
            <form class="form" action="recibe_datos.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fichero1">Fichero 1:</label>
                <input type="file" class="form-control" id="fichero1" name="fichero1">
            </div>
            <div class="form-group">
                <label for="fichero2">Fichero 2:</label>
                <input type="file" class="form-control" id="fichero2" name="fichero2">
            </div>
            <button type="submit" class="submit btn btn-primary mt-3">Enviar</button>
            </form>



        </form>
    </div>
</body>



</html>