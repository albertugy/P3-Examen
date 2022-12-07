<?php
    include("registro.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Estilos/Estilos.css">
    <title>Publicaciones</title>
</head>
<body>
    <br>
    <h1>Lista de Articulos</h1>
    <br>
    <table>
        <tr>
            <th>Titulo </th>
            <th>Autor</th>
            <th>Descripción</th>    
            <th>Imagen</th>
            <th>Fecha de registro</th>

        </tr>

        <?php
        $sql = "SELECT * from datos";
        $Llamar = mysqli_query($Conectar, $sql);
        while ($Mostar = mysqli_fetch_array($Llamar)) {
        ?>
        <tr>
            <td><?php echo($Mostar ['Titulo'])?></td>
            <td><?php echo($Mostar ['Autor'])?></td>
            <td><?php echo($Mostar ['Descripción'])?></td>
            <td><?php echo($Mostar ['Imagen'])?></td>
            <td><?php echo($Mostar ['Fecha'])?></td>
        </tr>
        <?php
        }
        ?> 
    </table>
    <br>
    <hr>
    <br>
    <h2>Ve a registrar tu propio articulo</h2>
    <br>
    <a href="Formulario.php">Ir al registro</a>
    
</body>
</html>


