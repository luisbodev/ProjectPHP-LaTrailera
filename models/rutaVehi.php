<?php 
	
	class RutaVehi
	{
		private $idRuta;
		private $kilometraje;
		private $latPuntoA;
		private $lngPuntoA;
		private $latPuntoB;
		private $lngPuntoB;
		private $idMotorista;
		private $idVehiculo;
		private $carga;
		private $descripcion;
		private $kmRecorridos;
		
		function __construct($idRuta,$kilometraje,$latPuntoA,$lngPuntoA,$latPuntoB,$lngPuntoB,$idMotorista,$idVehiculo,$carga,$descripcion,$kmRecorridos)
		{
			$this->idRuta=$idRuta;
			$this->kilometraje=$kilometraje;
			$this->latPuntoA=$latPuntoA;
			$this->lngPuntoA=$lngPuntoA;
			$this->latPuntoB=$latPuntoB;
			$this->lngPuntoB=$lngPuntoB;
			$this->idMotorista=$idMotorista;
			$this->idVehiculo=$idVehiculo;
			$this->carga=$carga;
			$this->descripcion=$descripcion;
			$this->kmRecorridos=$kmRecorridos;
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

		function getIdVehiculo(){
			return $this->idVehiculo;
		}
		function setIdVehiculo($idVehiculo){
            $this->idVehiculo=$idVehiculo;
		}

		function getCarga(){
			return $this->carga;
		}
		function setCarga($carga){
            $this->carga=$carga;
		}
		
		function getDescripcion(){
			return $this->descripcion;
		}
		function setDescripcion($descripcion){
            $this->descripcion=$descripcion;
		}

		function getKmRecorridos(){
			return $this->kmRecorridos;
		}
		function setKmRecorridos($kmRecorridos){
            $this->kmRecorridos=$kmRecorridos;
		}


		
	}

?>