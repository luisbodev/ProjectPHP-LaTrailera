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
    
    
    if(empty($_REQUEST['idEnvioD'])){
        header('location:controlEnvioCliente.php');
    }
    else{
        require '../models/detalleEnvioModel.php';
        $error='';
        $obj= new DetalleEnvioModel();

        // $datosRuta=$obj->getRuta();
        
        $e=$_REQUEST['idEnvioD'];
        $datos1 = $obj->getDetalleEnvio($e);

        require '../views/clienteDetalleEnvioVista.php';
    }
?>