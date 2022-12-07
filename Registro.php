<?php
$Conectar = mysqli_connect("localhost", "root", "", "formulario");

if(isset($_POST['registro'])){
    if(strlen($_POST['Titulo']) >= 1 &&  strlen($_POST['Autor']) >= 1 &&  strlen($_POST['Descripcion']) >= 1 && strlen($_POST['Imagen']) >= 1  ){
        
        $Titulo=trim($_POST ['Titulo']);
        $Autor=trim($_POST ['Autor']);
        $Descripcion=trim ($_POST ['Descripcion']);
        $Imagen = trim($_POST['Imagen']);
        $Fecha = date("d/m/y");
        $Consultar = "INSERT INTO datos(Titulo, Autor, Descripción, Imagen, Fecha) VALUES ('$Titulo','$Autor','$Descripcion','$Imagen','$Fecha')";
        $Resultado = mysqli_query($Conectar, $Consultar);
        if($Resultado){
          ?>
            <h3 class="Subido">¡Tu articulo se ha subido correctamente!</h3>
            <?php    
        }else{
            ?>
            <h3 class="Error">¡Lo sentimos no se ha podido subir su articulo!</h3>
            <?php    
        }
    }else{
        ?>
        <h3 class="Error">¡Por favor complete los campos!</h3>
        <?php    
    }
}

?>