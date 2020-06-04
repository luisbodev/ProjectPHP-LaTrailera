<?php
     class UsuarioCliente {
        private $idUsuarioCli;
        private $usuarioCli;
        private $passwordCli;
       
        
        function __construct($idUsuarioCli, $usuarioCli, $passwordCli){
            $this->idUsuarioCli=$idUsuarioCli;
            $this->usuarioCli=$usuarioCli;
            $this->passwordCli=$passwordCli;
           
        }

        function setIdUsuarioCli($idUsuarioCli){
            $this->idUsuarioCli=$idUsuarioCli;
        }
        function getIdUsuarioCli(){
            return $this->idUsuarioCli;
        }

        function setUsuarioCli($usuarioCli){
            $this->usuarioCli=$usuarioCli;
        }
        function getUsuarioCli(){
            return $this->usuarioCli;
        }

        function setPasswordCli($passwordCli){
            $this->passwordCli=$passwordCli;
        }
        function getPasswordCli(){
            return $this->passwordCli;
        }

        


      
    }

?>