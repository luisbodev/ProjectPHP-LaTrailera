<?php
     
     
     session_start();
	if(isset($_REQUEST["c"])) {
		session_destroy();
		header("Location:controlLogin.php");
	}
   
	if(isset($_SESSION["administrador"])) {
		echo "Bienvenida/o ".$_SESSION["administrador"];
		echo " <a href='controlEmpleado.php?c=1'>Cerrar Sesión</a>";
	} else {
		header("Location:controlLogin.php");
	}
	//Fin del codigo de session

    
    require '../models/empleadoModel.php';



    $error="";
    $obEmp=new empleadoModel();

    if(isset($_REQUEST["eliminar"])) {
        $e=new Empleado($_REQUEST["idUsuarioEmp"], $_REQUEST["usuarioEmp"], $_REQUEST["password"], $_REQUEST["cargo"], $_REQUEST["idEmpleado"], $_REQUEST["nombre"], $_REQUEST["apellido"], $_REQUEST["sexo"], $_REQUEST["direccion"], $_REQUEST["cargo"], $_REQUEST["dui"], $_REQUEST["nit"]);
        $error=$obEmp->eliminarEmpleado($e);
    }

    //modificarEmpleadoSinPass
    
     if(isset($_REQUEST["modificar"])) {
        if($_REQUEST["password"]!=$_REQUEST["hiddenPass"]){
            $e=new Empleado($_REQUEST["idUsuarioEmp"], $_REQUEST["usuarioEmp"], $_REQUEST["password"], $_REQUEST["cargo"], $_REQUEST["idEmpleado"], $_REQUEST["nombre"], $_REQUEST["apellido"], $_REQUEST["sexo"], $_REQUEST["direccion"], $_REQUEST["cargo"], $_REQUEST["dui"], $_REQUEST["nit"]);
            $error=$obEmp->modificarEmpleado($e);
        } else {
            $e=new Empleado($_REQUEST["idUsuarioEmp"], $_REQUEST["usuarioEmp"], $_REQUEST["password"], $_REQUEST["cargo"], $_REQUEST["idEmpleado"], $_REQUEST["nombre"], $_REQUEST["apellido"], $_REQUEST["sexo"], $_REQUEST["direccion"], $_REQUEST["cargo"], $_REQUEST["dui"], $_REQUEST["nit"]);
            $error=$obEmp->modificarEmpleadoSinPass($e);
        }
    }
    
    if(isset($_REQUEST["guardar"])) {
        $e=new Empleado($_REQUEST["idUsuarioEmp"], $_REQUEST["usuarioEmp"], $_REQUEST["password"], $_REQUEST["cargo"], $_REQUEST["idEmpleado"], $_REQUEST["nombre"], $_REQUEST["apellido"], $_REQUEST["sexo"], $_REQUEST["direccion"], $_REQUEST["cargo"], $_REQUEST["dui"], $_REQUEST["nit"]);
        $error=$obEmp->insertarEmpleado($e);
    }
    
    
    

    

    $datos=$obEmp->getEmpleado();
    

    require '../views/empleadoVista.php';
?>
