<?php

include("conect.php");

$res = $conexion->query('SELECT * FROM perfil');

$filas= array();
while ($fila = $res->fetch_assoc()) {
    $filas[] = $fila;
}

echo json_encode($filas);

?>

