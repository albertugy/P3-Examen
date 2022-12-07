<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Estilos/Estilos.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h1>REGISTRA TU ARTICULO</h1>
        <input type="text" name="Titulo" placeholder="Titulo del articulo">
        <input type="text" name="Autor" placeholder="Autor del articulo">
        <input type="text" name="Descripcion" placeholder="Descripción del articulo">
        <input type="url" name="Imagen" placeholder="Link de la imagen">
        <input type="submit" name="registro">
    </form>
    <br>
    <hr>
    <br>
    <h2>Conoce todos los articulos registrados</h2>
    <br>
    <a href="Principal.php">Ir a ver los articulos</a>
    <br>
    <?php
    include("registro.php");
    ?>
</body>
</html>