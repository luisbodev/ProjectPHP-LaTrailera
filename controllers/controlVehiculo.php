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
	
	
	require '../models/vehiculoModel.php';

	$error="";
	$obVehiculo=new VehiculoModel();

	if (isset($_REQUEST["insertar"])) {
		$e=new Vehiculo($_REQUEST["idVehiculo"],$_REQUEST["marca"],$_REQUEST["placa"],$_REQUEST["modelo"],$_REQUEST["tazaCombustible"],$_REQUEST["capacidadCombustible"],$_REQUEST["kmRecorridos"]);
		$error=$obVehiculo->insertarVehiculo($e);
	}

	if (isset($_REQUEST["modificar"])) {
		$e=new Vehiculo($_REQUEST["idVehiculo"], $_REQUEST["marca"], $_REQUEST["placa"], $_REQUEST["modelo"], $_REQUEST["tazaCombustible"], $_REQUEST["capacidadCombustible"],$_REQUEST["kmRecorridos"]);
		$error=$obVehiculo->modificarVehiculo($e);
	}

	if (isset($_REQUEST["eliminar"])) {
		$e=new Vehiculo($_REQUEST["idVehiculo"], $_REQUEST["marca"], $_REQUEST["placa"], $_REQUEST["modelo"], $_REQUEST["tazaCombustible"], $_REQUEST["capacidadCombustible"], $_REQUEST["kmRecorridos"]); 
		$error=$obVehiculo->eliminarVehiculo($e);
	}	

	$datos=$obVehiculo->getVehiculo();
	require '../views/vehiculoVista.php';
?>