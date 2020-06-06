<?php
	require '../models/envioModel.php';

	$error='';
	$obj= new EnvioModel();

	$datos = $obj->getEnvio();
	$datosUsuarioCli = $obj->getUsuarioCli();
	$datosUsuarioEmpe=$obj->getUsuarioEmp();

	// if(isset($_REQUEST['editarbtn'])){
		
		$e=2;
		$datos1 = $obj->getDetalleEnvio($e);
        foreach ($datos1 as $e) {
        	$idDetalleEnvio=$e->getIdDetalleEnvio();
            $idRuta=$e->getIdRuta();
            $idEnvio=$e->getIdEnvio();                    
            echo " $('#data').val('<tr><td scope='row'>$idDetalleEnvio</td><td>$idRuta</td><td><button>Cambiar Ruta</button></td>                        
		</tr>');";
		}
	// }
	
	

	require '../views/envioVista.php';
?>