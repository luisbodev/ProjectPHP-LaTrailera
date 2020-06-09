<?php
	
	session_start();
	if(isset($_REQUEST["c"])) {
		session_destroy();
		header("Location:controlLogin.php");
	}
   
	if(isset($_SESSION["administrador"])) {
		echo "Bienvenida/o ".$_SESSION["administrador"];
		echo " <a href='controlEmpleado.php?c=1'>Cerrar Sesión</a>";
	} else {
		header("Location:controlLogin.php");
	}
	//Fin del codigo de session
	
	require '../models/envioModel.php';

	$error='';
	$obj= new EnvioModel();

	
	if(isset($_REQUEST["guardar"])) {
		$e=new Envio('',$_REQUEST['fechaRealizacion'],$_REQUEST['fechaEntrega'],'','','','',$_REQUEST['usuarioCli'],$_REQUEST['usuarioEmp']);
		$error=$obj->insertarEnvio($e);
	}
	if(isset($_REQUEST["modificar"])) {
            $e=new Envio($_REQUEST['idEnvio'],$_REQUEST['fechaRealizacion'],$_REQUEST['fechaEntrega'],'','','','',$_REQUEST['usuarioCli'],$_REQUEST['usuarioEmp']);
            $error=$obj->modificarEnvio($e);
	}
	if(isset($_REQUEST["eliminar"])) {
        $e=new Envio($_REQUEST['idEnvio'],$_REQUEST['fechaRealizacion'],$_REQUEST['fechaEntrega'],'','','','',$_REQUEST['usuarioCli'],$_REQUEST['usuarioEmp'],'','');
        $error=$obj->eleminarEnvio($e);
    }

	
	
	
	
	
	$datos = $obj->getEnvio();
	$datosUsuarioCli = $obj->getUsuarioCli();
	$datosUsuarioEmpe=$obj->getUsuarioEmp();
	
	// // Boton para mostrar detalle del envio seleccionado
	// if(isset($_REQUEST['btnDetalleEnvio'])){
	// 	$e=new EnvioDetalle($_REQUEST['idEnvio'],$_REQUEST['fechaRealizacion'],$_REQUEST['fechaEntrega'],'','','','',$_REQUEST['usuarioCli'],$_REQUEST['usuarioEmp'],'','');
	// 	header('Location:controlDetalleEnvio.php');
	// }
	
	require '../views/envioVista.php';
	
?>