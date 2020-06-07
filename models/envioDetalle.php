<?php 
	require ('envio.php');

	class EnvioDetalle{
		private $idDetalleEnvio;
		private $idRuta;
		private $idEnvio;
		

		function __construct($idDetalleEnvio,$idRuta,$idEnvio){
			$this->idDetalleEnvio=$idDetalleEnvio;
			$this->idRuta=$idRuta;
			$this->idEnvio=$idEnvio;
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
	}
?>