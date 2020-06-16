<?php 
	
	class EnvioDetalleRuta{
		private $idDetalleEnvio;
		private $idRuta;
		private $idEnvio;
		private $latPuntoA;
		private $lngPuntoA;
		private $latPuntoB;
		private $lngPuntoB;
		private $descripcion;
		

		function __construct($idDetalleEnvio,$idRuta,$idEnvio,$latPuntoA,$lngPuntoA,$latPuntoB,$lngPuntoB,$descripcion){
			$this->idDetalleEnvio=$idDetalleEnvio;
			$this->idRuta=$idRuta;
			$this->idEnvio=$idEnvio;
			$this->latPuntoA=$latPuntoA;
			$this->lngPuntoA=$lngPuntoA;
			$this->latPuntoB=$latPuntoB;
			$this->lngPuntoB=$lngPuntoB;
			$this->descripcion=$descripcion;


		}

		function setLatPuntoA($latPuntoA){
			$this->latPuntoA=$latPuntoA;
		}
		function getLatPuntoA(){
			return $this->latPuntoA;
		}
		function setLngPuntoA($lngPuntoA){
			$this->lngPuntoA=$lngPuntoA;
		}
		function getLngPuntoA(){
			return $this->lngPuntoA;
		}


		function setLatPuntoB($latPuntoB){
			$this->latPuntoB=$latPuntoB;
		}
		function getLatPuntoB(){
			return $this->latPuntoB;
		}
		function setLngPuntoB($lngPuntoB){
			$this->lngPuntoB=$lngPuntoB;
		}
		function getLngPuntoB(){
			return $this->lngPuntoB;
		}


		function setIdDetalleEnvio($idDetalleEnvio){
			$this->idDetalleEnvio=$idDetalleEnvio;
		}
		function getIdDetalleEnvio(){
			return $this->idDetalleEnvio;
		}
		function setIdRuta($idRuta){
			$this->idRuta=$idRuta;
		}
		function getIdRuta(){
			return $this->idRuta;
		}
		function setIdEnvio($idEnvio){
			$this->idEnvio=$idEnvio;
		}
		function getIdEnvio(){
			return $this->idEnvio;
		}
		function getDescripcion(){
			return $this->descripcion;
		}
		function setDescripcion($descripcion){
            $this->descripcion=$descripcion;
		}
	}
?>