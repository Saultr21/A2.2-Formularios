<?php
//Recogemos los datos del formulario
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$email = $_GET['email'];
$password = $_GET['password'];
$errores[] = "";
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$asignaturas = [];

function asignaturas(){
    if(isset($_POST['dsw'])){
        array_push($asignaturas, "dsw");
    }
    if(isset($_POST['daw'])){
        array_push($asignaturas, "daw");
    }
    if(isset($_POST['fol'])){
        array_push($asignaturas, "fol");
    }
    if(isset($_POST['dpl'])){
        array_push($asignaturas, "dpl");
    }
    if(isset($_POST['dor'])){
        array_push($asignaturas, "dor");
    }
}
?>
