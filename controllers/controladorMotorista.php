<?php  
	require '../models/motoristaModel.php';

	$error="";
	$obMotorista=new MotoristaModel();

	if (isset($_REQUEST["insertar"])) {
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