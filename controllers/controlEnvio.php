<?php
	require '../models/envioModel.php';

	$error='';
	$obj= new EnvioModel();

	$datos = $obj->getEnvio();

	require '../views/envioVista.php';
?>