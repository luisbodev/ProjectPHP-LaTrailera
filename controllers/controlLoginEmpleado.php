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
	        $_SESSION["s1"]=$_REQUEST["usuarioCli"];//Identificador de la seción
			//header("Location:controlEmpleado.php");
			echo "<script>alert('Empleado común')</script>";
	    } elseif($r==1 && $rol==1) {
			echo "<script>alert('Empleado Admin')</script>"; /*Aquí irá el código para abrir la ventana de admonistrador*/
		} else {
			echo "<script>alert('Usuario o contraseña no validos')</script>";
		}
	        
	}

	require "../views/loginEmpleado.php";

?>