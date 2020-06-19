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
	
	require '../models/rutaModel.php';

	$error="";
	$obRuta=new RutaModel();

	if (isset($_REQUEST["guardar"])) {
		$e=new Ruta($_REQUEST["idRuta"],$_REQUEST["otro"],$_REQUEST["my_lat"],$_REQUEST["my_lng"],$_REQUEST["your_lat"],$_REQUEST["your_lng"],$_REQUEST["idMotorista"],$_REQUEST["idVehiculo"],$_REQUEST["carga"],$_REQUEST["descripcion"]);
		$error=$obRuta->insertarRuta($e);
	}

	if (isset($_REQUEST["modificar"])) {
		
			$e=new Ruta($_REQUEST["idRuta"],$_REQUEST["otro"],$_REQUEST["my_lat"],$_REQUEST["my_lng"],$_REQUEST["your_lat"],$_REQUEST["your_lng"],$_REQUEST["idMotorista"],$_REQUEST["idVehiculo"],$_REQUEST["carga"],$_REQUEST["descripcion"]);
			$error=$obRuta->modificarRutaSinKm($e);
		
		
	}

	if (isset($_REQUEST["eliminar"])) {
		$e=new Ruta($_REQUEST["idRuta"],$_REQUEST["otro"],$_REQUEST["my_lat"],$_REQUEST["my_lng"],$_REQUEST["your_lat"],$_REQUEST["your_lng"],$_REQUEST["idMotorista"],$_REQUEST["idVehiculo"],$_REQUEST["carga"],$_REQUEST["descripcion"]);
		$error=$obRuta->eliminarRuta($e);
	}	

	$datos=$obRuta->getRuta();
	$motor=$obRuta->getMotorista();
	$vehi=$obRuta->getVehiculo();
	//$carga=$obRuta->getCarga();
	require '../views/rutaVista.php';
?>