<?php
    require '../models/usuarioCliModel.php';

    $obUser=new UsuarioCliModel();

    if(isset($_REQUEST["validar"])) {
        $r=$obUser->validarUsuario($_REQUEST["login"], $_REQUEST["password"]);
        if($r==1) {
            session_start();
            $_SESSION["s1"]=$_REQUEST["login"];//Identificador de la seción
            header("Location:controlEmpleado.php");
        }
        else
            echo "<script>alert('Usuario o contraseña no validos')</script>";
    }
    require "../views/loginCli.php";
?>