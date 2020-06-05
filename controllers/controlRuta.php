<?php  
	require '../models/rutaModel.php';

	$error="";
	$obRuta=new RutaModel();

	if (isset($_REQUEST["insertar"])) {
		$e=new Ruta($_REQUEST["idRuta"],$_REQUEST["kilometraje"],$_REQUEST["my_lat"],$_REQUEST["my_lng"],$_REQUEST["your_lat"],$_REQUEST["your_lng"],$_REQUEST["idMotorista"],$_REQUEST["idVehiculo"],$_REQUEST["idCarga"]);
		$error=$obRuta->insertarRuta($e);
	}

	if (isset($_REQUEST["modificar"])) {
		$e=new Ruta($_REQUEST["idRuta"],$_REQUEST["kilometraje"],$_REQUEST["my_lat"],$_REQUEST["my_lng"],$_REQUEST["your_lat"],$_REQUEST["your_lng"],$_REQUEST["idMotorista"],$_REQUEST["idVehiculo"],$_REQUEST["idCarga"]);
		$error=$obRuta->modificarRuta($e);
	}

	if (isset($_REQUEST["eliminar"])) {
		$e=new Ruta($_REQUEST["idRuta"],$_REQUEST["kilometraje"],$_REQUEST["my_lat"],$_REQUEST["my_lng"],$_REQUEST["your_lat"],$_REQUEST["your_lng"],$_REQUEST["idMotorista"],$_REQUEST["idVehiculo"],$_REQUEST["idCarga"]);
		$error=$obRuta->eliminarRuta($e);
	}	

	$datos=$obRuta->getRuta();
	$motor=$obRuta->getMotorista();
	$vehi=$obRuta->getVehiculo();
	$carga=$obRuta->getCarga();
	require '../views/rutaVista.php';
?>