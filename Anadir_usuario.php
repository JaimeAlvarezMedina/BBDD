<?php
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=practica9', 'root', '');/* Hacemos la conexion PDO */
        $consulta = $conexion->prepare("INSERT INTO usuarios (Usuario, Contraseña) VALUES (:usuario,:contra)");/* Hacemos la consulta */
        $consulta->bindParam(':usuario', $usuario);
        $consulta->bindParam(':contra', $contra);
        $usuario=$_POST['usuario'];
        $contra=$_POST['contra'];
        $consulta -> execute();/* La ejecutamos */

        $consulta= null; // obligado para cerrar la conexión
        $conexion = null;
        header("Location:Principal.php");
    }catch(PDOException $e){
        echo "ERROR: " . $e->getMessage();
    }
  
?>