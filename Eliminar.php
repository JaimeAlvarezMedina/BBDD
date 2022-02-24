<?php
    include("Conexion.php");

    if(isset($_GET["id"])){/* Cogemos la id de la fila */
        $id=$_GET['id'];
        $consulta="DELETE FROM productos WHERE id='$id'";/* borramos por la id */
        $resultado=mysqli_query($conexion,$consulta);
        if(!$resultado){
            die("El elemento no existe");
        }
        else{
            header("Location:Principio.php");
        }
    }
?>