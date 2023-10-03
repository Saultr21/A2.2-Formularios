<!DOCTYPE HTML>  
<html>
<body>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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

        </form>
        
<?php
    
?>

</body>
</html>