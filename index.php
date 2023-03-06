<?php
include("conect.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/css">

    <title>Test</title>
</head>

<body>
    <div class="flex" style="display: flex">
    <div>
        <form method="post" class="estilo" id="formularioregistro">
            <p>Registro</p>
            Nombre: <input type="text" name="nombre" >
            Apellido: <input type="text" name="apellido" >
            Rut: <input type="text" name="rut" >
            Tipo: <input type="text" name="tipo" >
            Tel: <input type="tel" name="telefono" >
            Activo: <input type="text" name="activo" >
            Mail: <input type="mail" name="email" >
            <button type="submit">Registro</button>
        </form>
        
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Rut</th>
                    <th>Tipo</th>
                    <th>Tel</th>
                    <th>Activo</th>
                    <th>Mail</th>
                    <th>Sel</th>
                    <th>Del</th>
                </tr>
            </thead>


            <tbody id="prev">
            </tbody>
        </table>
    </div>
    </div>
    <script src="script.js">
        
    </script>
    <script src="mostrar.js">
        
        </script>
</body>

</html>