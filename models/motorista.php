<?php 
	
	class Motorista
	{
		private $idMotorista;
		private $nombre;
		private $apellido;
		private $direccion;
		private $dui;
		private $nit;
		private $numLicencia;
		function __construct($idMotorista,$nombre,$apellido,$direccion,$dui,$nit,$numLicencia)
		{
			$this->idMotorista=$idMotorista;
			$this->nombre=$nombre;
			$this->apellido=$apellido;
			$this->direccion=$direccion;
			$this->dui=$dui;
			$this->nit=$nit;
			$this->numLicencia=$numLicencia;
		}

		function getIdMotorista(){
			return $this->idMotorista;
		}
		function getNombre(){
			return $this->nombre;
		}
		function getApellido(){
			return $this->apellido;
		}
		function getDireccion(){
			return $this->direccion;
		}
		function getDui(){
			return $this->dui;
		}
		function getNit(){
			return $this->nit;
		}
		function getNumLicencia(){
			return $this->numLicencia;
		}
	}

?>