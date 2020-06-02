<?php  
	require '../models/rutaModel.php';

	$error="";
	$obRuta=new RutaModel();

	if (isset($_REQUEST["insertar"])) {
		$e=new Ruta($_REQUEST["idRuta"],$_REQUEST["kilometraje"],$_REQUEST["my_lat"],$_REQUEST["my_lng"],$_REQUEST["your_lat"],$_REQUEST["your_lng"],$_REQUEST["idMotorista"]);
		$error=$obRuta->insertarRuta($e);
	}

	if (isset($_REQUEST["modificar"])) {
		$e=new Ruta($_REQUEST["idRuta"],$_REQUEST["kilometraje"],$_REQUEST["my_lat"],$_REQUEST["my_lng"],$_REQUEST["your_lat"],$_REQUEST["your_lng"],$_REQUEST["idMotorista"]);
		$error=$obRuta->modificarRuta($e);
	}

	if (isset($_REQUEST["eliminar"])) {
		$e=new Ruta($_REQUEST["idRuta"],$_REQUEST["kilometraje"],$_REQUEST["my_lat"],$_REQUEST["my_lng"],$_REQUEST["your_lat"],$_REQUEST["your_lng"],$_REQUEST["idMotorista"]);
		$error=$obRuta->eliminarRuta($e);
	}	

	$datos=$obRuta->getRuta();
	$motor=$obRuta->getMotorista();
	require '../views/rutaVista.php';
?>