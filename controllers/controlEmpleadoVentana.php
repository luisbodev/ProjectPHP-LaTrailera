<?php 
    session_start();
    if(isset($_REQUEST["c"])) {
        session_destroy();
        header("Location:controlLogin.php");
    }
    
    if(isset($_SESSION["empleado"])) {
        //echo "Bienvenida/o ".$_SESSION["cliente"];
        //echo " <a href='controlEmpleado.php?c=1'>Cerrar Sesión</a>";
    } else {
        header("Location:controlLogin.php");
    }
    require "../views/empleadoVentanaVista.php";
?>