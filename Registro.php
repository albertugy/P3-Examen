<?php
$conectar = mysqli_connect("localhost", "root", "", "formulario");

if(isset($_POST['registro'])){
    if(strlen($_POST['Titulo']) < 1 &&  strlen($_POST['Autor']) < 1 &&  strlen($_POST['Descripcion']) < 1 && strlen($_POST['Imagen']) < 1  ){
        
        $Titulo=$_POST ['Tiulo'];
        $Autor=$_POST ['Autor'];
        $Descripcion=trim ($_POST ['Descripcion']);
        $Imagen = trim($_POST['Imagen']);
        $Consultar = "INSERT INTO datos(Titulo, Autor, Descripción, Imagen, Fecha) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
    }
}

?>