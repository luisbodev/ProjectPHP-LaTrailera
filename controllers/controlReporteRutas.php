<?php  
	session_start();
	if(isset($_REQUEST["c"])) {
		session_destroy();
		header("Location:controlLogin.php");
	}
   
	if(isset($_SESSION["administrador"])) {
		//echo "Bienvenida/o ".$_SESSION["administrador"];
		//echo " <a href='controlEmpleado.php?c=1'>Cerrar Sesión</a>";
	} else {
		header("Location:controlLogin.php");
	}
    //Fin del codigo de session
    require '../models/reporteModel.php';
    
    $obj=new Reporte();
    $motor=$obj->getMotorista();
    
    
    $datosUsuarioCli = $obj->getUsuarioCli();

	require '../views/reporteRutas.php';
?>