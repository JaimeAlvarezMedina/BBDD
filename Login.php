<?php include("Conexion.php"); ?>

<?php
        session_start();
        $usuario=$_POST["usuario"];
        $contra=$_POST["contra"];
        
        $consulta="SELECT * FROM usuarios";
        $resultado=mysqli_query($conexion,$consulta);
        $valido=false;
        while($fila = mysqli_fetch_array($resultado)){
            if($fila["Usuario"]==$usuario and $fila["Contraseña"]==$contra){/* Comprobamos que sea igual el usuario introducido al de la base de datos */
                $_SESSION["usuario"]=$usuario;
                header("Location:Principio.php");
            }
        }
        echo "<script type='text/javascript'>alert('El usuario o contraseña no son correctos');</script>";/* Al no ser el usuario o la contraseña correcta nos da un alert */
        header('Refresh: 0; URL=Principal.php');
?>