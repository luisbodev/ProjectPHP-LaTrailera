<?php
	session_start();
    if(isset($_REQUEST["c"])) {
        session_destroy();
        header("Location:controlLogin.php");
    }
    
    if(isset($_SESSION["empleado"])) {
        //echo "Bienvenida/o ".$_SESSION["cliente"];
        //echo " <a href='controlEmpleado.php?c=1'>Cerrar Sesión</a>";
    } else {
        header("Location:controlLogin.php");
    }
	
	require '../models/envioModel.php';

	$error='';
	$obj= new EnvioModel();

	
	if(isset($_REQUEST["guardar"])) {
		$e=new Envio('',$_REQUEST['fechaRealizacion'],$_REQUEST['fechaEntrega'],'','','',$_REQUEST['usuarioEmp'],$_REQUEST['usuarioCli'],'');
		$error=$obj->insertarEnvioEmp($e);
	}
	
	$datos = $obj->getEnvio();
	$datosUsuarioCli = $obj->getUsuarioCli();
	
	
	require '../views/empleadoEnvioVista.php';
	
?>