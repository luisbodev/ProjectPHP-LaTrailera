<?php
    
    session_start();
	if(isset($_REQUEST["c"])) {
		session_destroy();
		header("Location:controlLogin.php");
	}
   
	if(isset($_SESSION["empleado"])) {
		//echo "Bienvenida/o ".$_SESSION["administrador"];
		//echo " <a href='controlEmpleado.php?c=1'>Cerrar Sesión</a>";
	} else {
		header("Location:controlLogin.php");
	}
	//Fin del codigo de session
    
    
    require '../models/clienteModel.php';

    $error="";
    $obCli=new clienteModel();

    if(isset($_REQUEST["guardar"])) {
            $e=new Cliente($_REQUEST["idUsuarioCli"], $_REQUEST["usuarioCli"], $_REQUEST["passwordCli"], $_REQUEST["idCliente"], $_REQUEST["nombre"], $_REQUEST["apellido"], $_REQUEST["direccion"], $_REQUEST["nit"], $_REQUEST["numContacto"], $_REQUEST["correo"]);
        $error=$obCli->insertarCliente($e);
    }
    
 $datos=$obCli->getCliente();
    

    require '../views/empleadoClienteVista.php';
?>
