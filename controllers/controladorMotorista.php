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
	
	require '../models/motoristaModel.php';

	$error="";
	$obMotorista=new MotoristaModel();

	if (isset($_REQUEST["guardar"])) {
		$e=new Motorista($_REQUEST["idMotorista"],$_REQUEST["nombre"],$_REQUEST["apellido"],$_REQUEST["direccion"],$_REQUEST["dui"],$_REQUEST["nit"],$_REQUEST["numLicencia"]);
		$error=$obMotorista->insertarMotorista($e);
	}

	if (isset($_REQUEST["modificar"])) {
		$e=new Motorista($_REQUEST["idMotorista"],$_REQUEST["nombre"],$_REQUEST["apellido"],$_REQUEST["direccion"],$_REQUEST["dui"],$_REQUEST["nit"],$_REQUEST["numLicencia"]);
		$error=$obMotorista->modificarMotorista($e);
	}

	if (isset($_REQUEST["eliminar"])) {
		$e=new Motorista($_REQUEST["idMotorista"],$_REQUEST["nombre"],$_REQUEST["apellido"],$_REQUEST["direccion"],$_REQUEST["dui"],$_REQUEST["nit"],$_REQUEST["numLicencia"]);
		$error=$obMotorista->eliminarMotorista($e);
	}	

	$datos=$obMotorista->getMotorista();
	require '../views/motoristaVista.php';
?>