<?php

include("conect.php");


$id = $_POST['borrar'];

$consulta = "DELETE FROM perfil WHERE idCliente='$id'";
$resultado = mysqli_query($conexion,$consulta); 

?>