<?php  
	require '../models/cargaModel.php';

	$error="";
	$obCarga=new CargaModel();

	if (isset($_REQUEST["insertar"])) {
		$e=new Carga($_REQUEST["idCarga"],$_REQUEST["descripcion"],$_REQUEST["peso"]);
		$error=$obCarga->insertarCarga($e);
	}

	if (isset($_REQUEST["modificar"])) {
		$e=new Carga($_REQUEST["idCarga"],$_REQUEST["descripcion"],$_REQUEST["peso"]);
		$error=$obCarga->modificarCarga($e);
	}

	if (isset($_REQUEST["eliminar"])) {
		$e=new Carga($_REQUEST["idCarga"],$_REQUEST["descripcion"],$_REQUEST["peso"]);
		$error=$obCarga->eliminarCarga($e);
	}

	$datos=$obCarga->getCarga();
	require '../views/cargaVista.php';
?>