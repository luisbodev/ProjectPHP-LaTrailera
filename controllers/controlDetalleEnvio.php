<?php
    if(empty($_REQUEST['idEnvioD'])){
        header('location:controlEnvio.php');
    }
    else{
        require '../models/detalleEnvioModel.php';
        $error='';
        $obj= new DetalleEnvioModel();

        
        
        
        if(isset($_REQUEST["guardar"])) {
            $d=new EnvioDetalle('',$_REQUEST['ruta'],$_REQUEST['idEnvio']);
            $error=$obj->insertarDetalleEnvio($d);
        }
        if(isset($_REQUEST["modificar"])) {
            $d=new EnvioDetalle($_REQUEST['idEnvioDetalle'],$_REQUEST['ruta'],$_REQUEST['idEnvio']);
            $error=$obj->modificarDetalleEnvio($d);
        }
        if(isset($_REQUEST["eliminar"])) {
            $d=new EnvioDetalle($_REQUEST['idEnvioDetalle'],$_REQUEST['ruta'],$_REQUEST['idEnvio']);
            $error=$obj->eleminarDetalleEnvio($d);
        }

        $datosRuta=$obj->getRuta();
        
        $e=$_REQUEST['idEnvioD'];
        $datos1 = $obj->getDetalleEnvio($e);

        require '../views/detalleEnvioVista.php';
    }
?>