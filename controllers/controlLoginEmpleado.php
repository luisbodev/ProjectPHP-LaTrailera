<?php 
	require '../models/usuarioCliModel.php';

	$obUser=new UsuarioCliModel();
	
	
	// Validar la entrada el empleado solo sucederá si el usuario comienza con "emp"
	if(isset($_REQUEST["btnValidarEmpleado"])) {
		$r=$obUser->validarUsuarioEmpleado($_REQUEST["usuarioCli"], $_REQUEST["passwordEmp"]);
		//$rol=$obUser->tomarRol($_REQUEST["usuarioCli"], $_REQUEST["passwordEmp"]);
		$rol=$obUser->tomarRol($_REQUEST["usuarioCli"], $_REQUEST["passwordEmp"]);
	    if($r==1 && $rol==0) {
	        session_start();
	        $_SESSION["empleado"]=$_REQUEST["usuarioCli"];//Identificador de la seción
			/*Aquí irá el código para abrir la ventana de empleado*/
			header("Location:controlEmpleadoVentana.php");
	    } elseif($r==1 && $rol==1) {
			session_start();
	        $_SESSION["administrador"]=$_REQUEST["usuarioCli"];
			/*Aquí irá el código para abrir la ventana de administrador*/
			header("Location:controlAdminVentana.php");

		} else {
			echo "<script>alert('Usuario o contraseña no validos')</script>";
		}
	        
	}

	require "../views/loginEmpleado.php";

?>