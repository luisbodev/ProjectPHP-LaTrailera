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
	//Fin del codigo de session
    
    
    if(empty($_REQUEST['idEnvioD'])){
        header('location:controlEnvioEmpleado.php');
    }
    else{
        require '../models/detalleEnvioModel.php';
        $error='';
        $obj= new DetalleEnvioModel();

        
        
        
        if(isset($_REQUEST["guardar"])) {
            $d=new EnvioDetalle('',$_REQUEST['ruta'],$_REQUEST['idEnvio']);
            $error=$obj->insertarDetalleEnvio($d);
        }

        $datosRuta=$obj->getRuta();
        
        $e=$_REQUEST['idEnvioD'];
        $datos1 = $obj->getDetalleEnvio($e);

        require '../views/empleadoDetalleEnvioVista.php';
    }
?>