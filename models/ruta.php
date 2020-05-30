<?php 
	
	class Ruta
	{
		private $idRuta;
		private $kilometraje;
		private $puntoPartida;
		private $puntoLlegada;
		private $idMotorista;
		
		function __construct($idRuta,$kilometraje,$puntoPartida,$puntoLlegada,$idMotorista)
		{
			$this->idRuta=$idRuta;
			$this->kilometraje=$kilometraje;
			$this->puntoPartida=$puntoPartida;
			$this->puntoLlegada=$puntoLlegada;
			$this->idMotorista=$idMotorista;
		}

		function getIdRuta(){
			return $this->idRuta;
		}
		function getKilometraje(){
			return $this->kilometraje;
		}
		function getPuntoPartida(){
			return $this->puntoPartida;
		}
		function getPuntoLlegada(){
			return $this->puntoLlegada;
		}
		function getIdMotorista(){
			return $this->idMotorista;
		}
		
	}

?>