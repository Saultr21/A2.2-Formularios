<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Formulario 1</title>
</head>
<style>


</style>

<body class="d-flex align-items-center">
    <div class="d-flex justify-content-center container formulario mt-5">
        <form class="form" action="recibe_datos.php" method="get">
            <p class="form-title">Formulario</p>
            <input type="hidden" name="pagina_actual" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input class="align-content-right form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input class="form-control" id="apellidos" name="apellidos" type="text" placeholder="Apellidos" required>
            </div>
            <div class="form-group">
                <label for="phone">Teléfono:</label>
                <input class="form-control" id="phone" name="phone" type="text" placeholder="Número de telefono" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" id="email" name="email" type="email" placeholder="Correo" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" required>
            </div>

            <button type="submit" class="submit btn btn-primary mt-3">Enviar</button>
        </form>
    </div>
</body>


</html>