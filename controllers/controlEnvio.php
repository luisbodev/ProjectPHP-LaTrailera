<?php
	require '../models/envioModel.php';

	$error='';
	$obj= new EnvioModel();

	
	
	
	
	$datos = $obj->getEnvio();
	$datosUsuarioCli = $obj->getUsuarioCli();
	$datosUsuarioEmpe=$obj->getUsuarioEmp();
	$datosRuta=$obj->getRuta();
	
		
	
	

	require '../views/envioVista.php';
?>