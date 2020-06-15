<?php
    session_start();
    if(isset($_REQUEST["c"])) {
        session_destroy();
        header("Location:controlLogin.php");
    }

    if(isset($_SESSION["cliente"])) {
        //echo "Bienvenida/o ".$_SESSION["cliente"];
        //echo " <a href='controlEmpleado.php?c=1'>Cerrar Sesión</a>";
    } else {
        header("Location:controlLogin.php");
    }
    //Fin del codigo de session
	require '../models/clienteEnvioModel.php';

    $error='';
	$obj= new EnvioModel();
	
	$datos = $obj->getEnvio($_SESSION["cliente"]);

	
	// // Boton para mostrar detalle del envio seleccionado
	// if(isset($_REQUEST['btnDetalleEnvio'])){
	// 	$e=new EnvioDetalle($_REQUEST['idEnvio'],$_REQUEST['fechaRealizacion'],$_REQUEST['fechaEntrega'],'','','','',$_REQUEST['usuarioCli'],$_REQUEST['usuarioEmp'],'','');
	// 	header('Location:controlDetalleEnvio.php');
	// }
	
	require '../views/clienteEnvioVista.php';
?>