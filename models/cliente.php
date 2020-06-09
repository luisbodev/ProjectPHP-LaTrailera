<?php
    require_once('usuarioCliente.php');

    class Cliente extends UsuarioCliente {
        private $idCliente;
        private $nombre;
        private $apellido;
        private $direccion;
        private $nit;
        private $numContacto;
        private $correo;
        
        

        function __construct($idUsuarioCli, $usuarioCli, $passwordCli, $idCliente, $nombre, $apellido, $direccion, $nit, $numContacto, $correo){
            parent::__construct($idUsuarioCli, $usuarioCli, $passwordCli);
            $this->idCliente=$idCliente;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->direccion=$direccion;
            $this->nit=$nit; 
            $this->numContacto=$numContacto;
            $this->correo=$correo;
                       
        }

        function setIdCliente($idCliente){
            $this->idCliente=$idCliente;
        }
        function getIdCliente(){
            return $this->idCliente;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        function setNombre($nombre){
            $this->nombre=$nombre;
        }
        function getNombre(){
            return $this->nombre;
        }
    
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        
        function setDireccion($direccion){
            $this->direccion=$direccion;
        }
        function getDireccion(){
            return $this->direccion;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
         function setNit($nit){
            $this->nit=$nit;
        }
        function getNit(){
            return $this->nit;
        }

        function setNumContacto($numContacto){
            $this->numContacto=$numContacto;
        }
        function getNumContacto(){
            return $this->numContacto;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        function setCorreo($correo){
            $this->correo=$correo;
        }
        function getCorreo(){
            return $this->correo;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        function setApellido($apellido){
            $this->apellido=$apellido;
        }
        function getApellido(){
            return $this->apellido;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

      
    }
?>