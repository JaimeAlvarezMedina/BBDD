<?php

    include("Conexion.php");/* Incluimos la conexion */

    $nombre=$_POST["nombre"];
    $stock=$_POST["stock"];
    if(!($nombre=="" && $stock=="")){/* Para comprobar que no esten vacios */
        $consulta=$conexion->prepare("INSERT INTO productos(nombre,stock) VALUES (?,?)");
        $consulta->bind_param("si",$nombre,$stock);
        $consulta->execute();
        header("Location:Principio.php");
    }
    else{
        echo "Error en la ejecución del programa";
    }
?>