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
    .form {
  background-color: #fff;
  display: block;
  padding: 1rem;
  max-width: 350px;
  border-radius: 0.5rem;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.form-title {
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: 600;
  text-align: center;
  color: #000;
}

.input-container {
  position: relative;
}

.input-container input, .form button {
  outline: none;
  border: 1px solid #e5e7eb;
  margin: 8px 0;
}

.input-container input {
  background-color: #fff;
  padding: 1rem;
  padding-right: 3rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  width: 300px;
  border-radius: 0.5rem;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

    </style>
<body class="d-flex align-items-center">
    <div class="d-flex justify-content-center container text-center formulario mt-5">
    <form class="form">
       <p class="form-title">Formulario</p>
       <div class="input-container">
          <input id="nombre" name="nombre" type="nombre" placeholder="Nombre">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input id="apellidos" name="apellidos" type="apellidos" placeholder="Apellidos">
          <span>
          </span>
      </div>
        <div class="input-container">
          <input id="email" name="email" type="email" placeholder="Correo">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input id="password" name="password" type="password" placeholder="Contraseña">
        </div>
         <button type="submit" class="submit btn btn-primary">Enviar</button>

   </form>
    </div>
</body>

</html>