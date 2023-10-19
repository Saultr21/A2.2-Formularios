<!DOCTYPE HTML>  
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Formulario 2</title>

        <?php
        $file = file_get_contents('fichero_form2.txt', true);
        $var_file = explode("/",$file);
        $opciones_defecto = [];
        foreach($var_file as $v)
        {
            $palabra=explode('=',$v);
            $opciones_defecto[trim($palabra[0])] = trim($palabra[1]);
        }

        $edad_defecto = $opciones_defecto["edad"];

        $pais_españa = $pais_eeuu = $pais_francia = $pais_marruecos = $pais_alemania = $pais_venezuela = $pais_colombia = $pais_otro = "";

        switch ($opciones_defecto["pais"]) {
            case "españa":
                $pais_españa = "selected";
                break;
            case "eeuu":
                $pais_eeuu = "selected";
                break;
            case "francia":
                $pais_francia = "selected";
                break;
            case "marruecos":
                $pais_marruecos = "selected";
                break;
            case "alemania":
                $pais_alemania = "selected";
                break;
            case "venezuela":
                $pais_venezuela = "selected";
                break;
            case "colombia":
                $pais_colombia = "selected";
                break;
            case "otro":
                $pais_otro = "selected";
                break;
        }

        $curso_dsw = $curso_dew = $curso_fol = $curso_dor = $curso_dpl = "";

        switch ($opciones_defecto["curso1"]) {
            case "DSW":
                $curso_dsw = "checked";
                break;
            case "DEW":
                $curso_dew = "checked";
                break;
            case "FOL":
                $curso_fol = "checked";
                break;
            case "DOR":
                $curso_dor = "checked";
                break;
            case "DPL":
                $curso_dpl = "checked";
                break;
        }

        switch ($opciones_defecto["curso2"]) {
            case "DSW":
                $curso_dsw = "checked";
                break;
            case "DEW":
                $curso_dew = "checked";
                break;
            case "FOL":
                $curso_fol = "checked";
                break;
            case "DOR":
                $curso_dor = "checked";
                break;
            case "DPL":
                $curso_dpl = "checked";
                break;
        }
    ?>
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
                <input type="number" name="edad" size="10" value="<?php echo $edad_defecto?>">
                </p>
                <p>¿Donde naciste?: <p>
                    <select name="pais" id="pais" multiple>
                        <option value="españa" <?php echo $pais_españa?>>España</option>
                        <option value="eeuu" <?php echo $pais_eeuu?>>EEUU</option>
                        <option value="francia" <?php echo $pais_francia?>>Francia</option>
                        <option value="marruecos" <?php echo $pais_marruecos?>>Marruecos</option>
                        <option value="alemania" <?php echo $pais_alemania?>>Alemania</option>
                        <option value="venezuela" <?php echo $pais_venezuela?>>Venezuela</option>
                        <option value="colombia" <?php echo $pais_colombia?>>Colombia</option>
                        <option value="otro" <?php echo $pais_otro?>>Otro</option>
                    </select>
                    <br>
                <p>Cursos a los que asistes este año: <br>
                <label for="dsw">DSW </label>
                <input type="checkbox" id="dsw" name="dsw" <?php echo $curso_dsw?>> <br>
                <label for="dsw">DAW </label>
                <input type="checkbox" id="daw" name="daw" <?php echo $curso_dew?>> <br>
                <label for="dsw">FOL </label>
                <input type="checkbox" id="fol" name="fol" <?php echo $curso_fol?>> <br>
                <label for="dsw">DOR </label>
                <input type="checkbox" id="dor" name="dor" <?php echo $curso_dor?>> <br>
                <label for="dsw">DPL </label>
                <input type="checkbox" id="dpl" name="dpl" <?php echo $curso_dpl?>> <br>
                </p>

                <form action="recibe_datos.php" method="post" enctype="multipart/form-data">
                <label for="myfile">Select a file:</label>
                <input type="file" id="myfile" name="archivo"> 
                    <input type="submit" value="Enviar fichero" />
                </form>

                <button type="submit" class="submit btn btn-primary mt-3">Enviar</button>
            </form>
        </div>

    </body>
</html>