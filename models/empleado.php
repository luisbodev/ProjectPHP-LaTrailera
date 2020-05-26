<?php
    require_once('usuarioEmpleado.php');

    class Empleado extends UsuarioEmpleado {
        private $idEmpleado;
        private $nombre;
        private $apellido;
        private $sexo;
        private $direccion;
        private $cargo;
        private $dui;
        private $nit;
        

        function __construct($idUsuarioEmp, $usuarioEmp, $password, $rol, $idEmpleado, $nombre, $apellido, $sexo, $direccion, $cargo, $dui, $nit){
            parent::__construct($idUsuarioEmp, $usuarioEmp, $password, $rol);
            $this->idEmpleado=$idEmpleado;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->sexo=$sexo;
            $this->direccion=$direccion;
            $this->cargo=$cargo;
            $this->dui=$dui;
            $this->nit=$nit;            
        }

        function setIdEmpleado($idEmpleado){
            $this->idEmpleado=$idEmpleado;
        }
        function getIdEmpleado(){
            return $this->idEmpleado;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        function setNombre($nombre){
            $this->nombre=$nombre;
        }
        function getNombre(){
            return $this->nombre;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        function setApellido($apellido){
            $this->apellido=$apellido;
        }
        function getApellido(){
            return $this->apellido;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        function setSexo($sexo){
            $this->sexo=$sexo;
        }
        function getSexo(){
            return $this->sexo;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        function setDireccion($direccion){
            $this->direccion=$direccion;
        }
        function getDireccion(){
            return $this->direccion;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        function setCargo($cargo){
            $this->cargo=$cargo;
        }
        function getCargo(){
            return $this->cargo;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        function setDui($dui){
            $this->dui=$dui;
        }
        function getDui(){
            return $this->dui;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        function setNit($nit){
            $this->nit=$nit;
        }
        function getNit(){
            return $this->nit;
        }
        //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

      
    }
?>