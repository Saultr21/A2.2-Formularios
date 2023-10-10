<!DOCTYPE HTML>  
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Formulario 2</title>
    </head>
    <body class="d-flex align-items-center">  
        <div  class="d-flex justify-content-center container formulario mt-5">
            <form class="form" action="recibe_datos.php" method="get">
            <input type="hidden" name="pagina_actual" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                <p>Sexo:
                <select name="sexo" id="sexo">
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                        <option value="otro">Otro</option>
                </select>
                </p>

                <p>Edad:
                <input type="number" name="edad" size="10">
                </p>
                <p>¿Donde naciste?: <p>
                    <select name="pais" id="pais" multiple>
                        <option value="españa">España</option>
                        <option value="eeuu">EEUU</option>
                        <option value="francia">Francia</option>
                        <option value="marruecos">Marruecos</option>
                        <option value="alemania">Alemania</option>
                        <option value="venezuela">Venezuela</option>
                        <option value="colombia">Colombia</option>
                        <option value="otro">Otro</option>
                    </select>
                    <br>
                <p>Cursos a los que asistes este año: <br>
                <label for="dsw">DSW </label>
                <input type="checkbox" id="dsw" name="dsw"> <br>
                <label for="dsw">DAW </label>
                <input type="checkbox" id="daw" name="daw"> <br>
                <label for="dsw">FOL </label>
                <input type="checkbox" id="fol" name="fol"> <br>
                <label for="dsw">DOR </label>
                <input type="checkbox" id="dor" name="dor"> <br>
                <label for="dsw">DPL </label>
                <input type="checkbox" id="dpl" name="dpl"> <br>
                </p>

                <button type="submit" class="submit btn btn-primary mt-3">Enviar</button>
            </form>
        </div>

    </body>
</html>