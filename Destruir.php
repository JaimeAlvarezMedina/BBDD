<?php
    session_start();
    $_SESSION["usuario"]=null;
    session_destroy();/* Destruimos la sesion */
    
    header('Location: Principal.php');/* Nos manda al login */ 
?>