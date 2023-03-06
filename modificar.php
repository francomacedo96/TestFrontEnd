<?php

include("conect.php");

$idCliente = $_POST['idCliente'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rut = $_POST['rut'];
$tipo = $_POST['tipo'];
$telefono = $_POST['telefono'];
$activo = $_POST['activo'];
$email = $_POST['email'];

$consulta = "UPDATE perfil SET nombre='$nombre', apellido='$apellido', rut='$rut', tipo='$tipo', telefono='$telefono', activo='$activo', email='$email' WHERE idCliente = $idCliente";
$resultado = mysqli_query($conexion,$consulta); 
/*
if($resultado) {
    ?>
    <h3>te registraste</h3>
    <?php
}
*/

?>
