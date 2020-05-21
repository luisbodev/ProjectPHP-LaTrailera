<?php
    require '../models/usuarioCliModel.php';

    $obUser=new UsuarioCliModel();
    
    //Boton Para enviar el login del cliente
    if(isset($_REQUEST["btnValidarCliente"])) {
        $r=$obUser->validarUsuario($_REQUEST["usuarioCli"], $_REQUEST["passwordCli"]);
        if($r==1) {
            session_start();
            $_SESSION["s1"]=$_REQUEST["usuarioCli"];//Identificador de la seción
            header("Location:controlEmpleado.php");
        }
        else
            echo "<script>alert('Usuario o contraseña no validos')</script>";
    }
    //Valida el usuario, si empieza con "emp" buscará en la tabla UsuariosEmp;
    if(isset($_REQUEST["btnUsuario"])) {

       

        $user=$_REQUEST["usuarioCli"];
        if(isset($_REQUEST["usuarioCli"])){
            $num=(strlen($user)-3);
            $rest = substr($user, 0, -($num));
        }
        if($rest=="Emp"){
            $r=$obUser->validarSoloUsuarioEmpleado($_REQUEST["usuarioCli"]);
        } else {
            $r=$obUser->validarSoloUsuario($_REQUEST["usuarioCli"]);
        }
        

        if($r==1) {
            echo "Te damos la bienvenida: ";
            echo $user;
        }
        else {
            echo "Usuario No valido";
            echo "<br> $rest";
        }
       
    }
    // Validar la entrada el empleado solo sucederá si el usuario comienza con "emp"
    if(isset($_REQUEST["btnValidarEmpleado"])) {
        $r=$obUser->validarUsuarioEmpleado($_REQUEST["usuarioCli"], $_REQUEST["passwordEmp"]);
        if($r==1) {
            session_start();
            $_SESSION["s1"]=$_REQUEST["usuarioCli"];//Identificador de la seción
            header("Location:controlEmpleado.php");
        }
        else
            echo "<script>alert('Usuario o contraseña no validos')</script>";
    }


    require "../views/loginCli.php";
?>