<?php
    session_start();
    if(isset($_REQUEST["c"])) {
        session_destroy();
        header("Location:controlLogin.php");
    }
    
    if(isset($_SESSION["s1"])) {
        echo "Bienvenida/o ".$_SESSION["s1"];
        echo " <a href='controlEmpleado.php?c=1'>Cerrar Sesión</a>";
    } else {
        header("Location:controlLogin.php");
    }

?>