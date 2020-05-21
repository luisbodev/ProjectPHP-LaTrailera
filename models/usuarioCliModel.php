<?php

require '../db/conexion.php';

class UsuarioCliModel extends Conexion {
    
    function __construct() {
        parent::__construct();
    }


    function validarUsuario($usuarioCli,$passwordCli) { //SELECT * FROM usuarioCli WHERE usuarioCli = "ismael08-jpg" AND passwordCli = "123
        $para=$this->con->prepare("select * from usuarioCli where usuarioCli=? and passwordCli=?");
        $para->bind_param('ss',$a,$b);
        $a=$usuarioCli;
        $b=sha1($passwordCli);//passwor encriptado.
        
        $para->execute();
        while($para->fetch()) {
            return 1;
        }

        return 0;
    }
}
?>