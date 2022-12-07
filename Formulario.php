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
        <input type="text" name="Titulo" placeholder="Titulo del articulo">
        <input type="text" name="Autor" placeholder="Autor del articulo">
        <input type="text" name="Descripcion" placeholder="Descripción del articulo">
        <input type="url" name="Imagen" placeholder="Link de la imagen">
        <input type="sumbit" name="register">
    </form>
    <?php
    include("registro.php");
    ?>
</body>
</html>