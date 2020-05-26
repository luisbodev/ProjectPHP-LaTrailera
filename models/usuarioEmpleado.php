<?php
     class UsuarioEmpleado {
        private $idUsuarioEmp;
        private $usuarioEmp;
        private $password;
        private $rol;
        
        function __construct($idUsuarioEmp, $usuarioEmp, $password, $rol){
            $this->idUsuarioEmp=$idUsuarioEmp;
            $this->usuarioEmp=$usuarioEmp;
            $this->password=$password;
            $this->rol=$rol;
        }

        function setIdUsuarioEmp($idUsuarioEmp){
            $this->idUsuarioEmp=$idUsuarioEmp;
        }
        function getIdUsuarioEmp(){
            return $this->idUsuarioEmp;
        }

        function setUsuarioEmp($usuarioEmp){
            $this->usuarioEmp=$usuarioEmp;
        }
        function getUsuarioEmp(){
            return $this->usuarioEmp;
        }

        function setPassword($password){
            $this->password=$password;
        }
        function getPassword(){
            return $this->password;
        }

        function setRol($rol){
            $this->rol=$rol;
        }
        function getRol(){
            return $this->rol;
        }


      
    }

?>