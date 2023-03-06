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
            Nombre: <input type="text" name="nombre" require>
            Apellido: <input type="text" name="apellido" require>
            Rut: <input type="text" name="rut" require>
            Tipo: <input type="text" name="tipo" require>
            Tel: <input type="tel" name="telefono" require>
            Activo: <input type="text" name="activo" require>
            Mail: <input type="mail" name="email" require>
            <button type="submit">Registro</button>
        </form>
        
    </div>

    <div>
        <table>
            <input type="button" value="Reload Page" onClick="document.location.reload(true)">
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