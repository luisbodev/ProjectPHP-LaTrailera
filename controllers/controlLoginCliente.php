<?php 
	require '../models/usuarioCliModel.php';

	$obUser=new UsuarioCliModel();
	
	//Boton Para enviar el login del cliente
	if(isset($_REQUEST["btnValidarCliente"])) {
	    $r=$obUser->validarUsuario($_REQUEST["usuarioCli"], $_REQUEST["passwordCli"]);
	    if($r==1) {
	        session_start();
	        $_SESSION["s1"]=$_REQUEST["usuarioCli"];//Identificador de la seción
	        header("Location:controlClienteVentana.php");

	    }
	    else
	        echo "<script>alert('Usuario o contraseña no validos')</script>";
	}

	require "../views/loginCliente.php";
	
?>