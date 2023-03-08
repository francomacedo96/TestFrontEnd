<?php

include("conect.php");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rut = $_POST['rut'];
$tipo = $_POST['tipo'];
$telefono = $_POST['telefono'];
$activo = $_POST['activo'];
$email = $_POST['email'];


$consulta = "INSERT INTO perfil(nombre, apellido, rut, tipo, telefono, activo, email) VALUES ('$nombre','$apellido','$rut','$tipo','$telefono','$activo','$email')";
$resultado = mysqli_query($conexion,$consulta); 
/*
if($resultado) {
    ?>
    <h3>te registraste</h3>
    <?php
}
*/

?>