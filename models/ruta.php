<?php 
	
	class Ruta
	{
		private $idRuta;
		private $kilometraje;
		private $latPuntoA;
		private $lngPuntoA;
		private $latPuntoB;
		private $lngPuntoB;
		private $idMotorista;
		
		function __construct($idRuta,$kilometraje,$latPuntoA,$lngPuntoA,$latPuntoB,$lngPuntoB,$idMotorista)
		{
			$this->idRuta=$idRuta;
			$this->kilometraje=$kilometraje;
			$this->latPuntoA=$latPuntoA;
			$this->lngPuntoA=$lngPuntoA;
			$this->latPuntoB=$latPuntoB;
			$this->lngPuntoB=$lngPuntoB;
			$this->idMotorista=$idMotorista;
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



		

		function setIdRuta($idRuta){
            $this->idRuta=$idRuta;
        }
		function getIdRuta(){
			return $this->idRuta;
		}

		function getKilometraje(){
			return $this->kilometraje;
		}
		function setKilometraje($kilometraje){
            $this->kilometraje=$kilometraje;
        }
	
		
		function getIdMotorista(){
			return $this->idMotorista;
		}
		function setIdMotorista($idMotorista){
            $this->idMotorista=$idMotorista;
		}
		



		
	}

?>