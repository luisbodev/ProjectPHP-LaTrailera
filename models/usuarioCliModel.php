<?php

require '../db/conexion.php';

class UsuarioCliModel extends Conexion {
    
    function __construct() {
        parent::__construct();
    }


    function validarUsuario($login,$password) { //SELECT * FROM usuarioCli WHERE usuarioCli = "ismael08-jpg" AND passwordCli = "123
        $para=$this->con->prepare("select * from usuarioCli where usuarioCli=? and passwordCli=?");
        $para->bind_param('ss',$a,$b);
        $a=$login;
        $b=sha1($password);//passwor encriptado.
        
        $para->execute();
        while($para->fetch()) {
            return 1;
        }

        return 0;
    }
}
?>