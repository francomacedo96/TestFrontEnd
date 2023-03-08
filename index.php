<?php
include("conect.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Test</title>
</head>

<body>
    <div class="flex" >
        <div class="flexforms">
            <div>
                <form method="post" class="estilo" id="formularioregistro">
                    <p>Registro</p>
                    Nombre: <input type="text" id="nombre" name="nombre" require>
                    Apellido: <input type="text" name="apellido" require>
                    Rut: <input type="text" name="rut" require>
                    Tipo:       
                    <select name="tipo" require>
                            <option value="empresa">empresa</option>
                            <option value="consumidorFinal">consumidorFinal</option>
                    </select>

                    
                    Tel: <input type="tel" name="telefono" require>
                    Activo: 
                    <select name="activo" require>
                            <option value="si">si</option>
                            <option value="no">no</option>
                    </select>
                    
                    Mail: <input type="mail" name="email" require>
                    <button type="submit" type="button" class="btn btn-dark">Registro</button>
                </form>
            </div>

            <div>
                <form method="post" class="estilo" id="formulariomod">
                    <p>Modificar</p>
                    Id: <input type="text" name="idCliente" require>
                    Nombre: <input type="text" name="nombre" require>
                    Apellido: <input type="text" name="apellido" require>
                    Rut: <input type="text" name="rut" require>
                    Tipo: 
                    <select name="tipo" require>
                            <option value="empresa">empresa</option>
                            <option value="consumidorFinal">consumidorFinal</option>
                    </select>                    Tel: <input type="tel" name="telefono" require>
                    Activo: 
                    <select name="activo" require>
                            <option value="si">si</option>
                            <option value="no">no</option>
                    </select>
                    Mail: <input type="mail" name="email" require>
                    <button type="submit" type="button" class="btn btn-dark">Modificar</button>
                </form>
        </div>
    </div>
    
    <div>
        <table class="table table-striped">
            <input type="button" value="Reload lista" onClick="document.location.reload(true)">
            <thead class="thead-dark">
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


    <script src="zmostrar.js">
    </script>

    <script src="modificar.js">
    </script>


        <script src="borrar.js">
        </script>      <!--
      -->

</body>

</html>