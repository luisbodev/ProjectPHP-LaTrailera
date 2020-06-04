<?php 
	
	class Vehiculo
	{
		private $idVehiculo;
		private $marca;
		private $placa;
		private $modelo;
		private $tazaCombustible;
		private $capacidadCombustible;
		private $kmRecorridos;
		function __construct($idVehiculo,$marca,$placa,$modelo,$tazaCombustible,$capacidadCombustible,$kmRecorridos)
		{
			$this->idVehiculo=$idVehiculo;
			$this->marca=$marca;
			$this->placa=$placa;
			$this->modelo=$modelo;
			$this->tazaCombustible=$tazaCombustible;
			$this->capacidadCombustible=$capacidadCombustible;
			$this->kmRecorridos=$kmRecorridos;
		}

		function getIdVehiculo(){
			return $this->idVehiculo;
		}
		function getMarca(){
			return $this->marca;
		}
		function getPlaca(){
			return $this->placa;
		}
		function getModelo(){
			return $this->modelo;
		}
		function getTazaCombustible(){
			return $this->tazaCombustible;
		}
		function getCapacidadCombustible(){
			return $this->capacidadCombustible;
		}
		function getKmRecorridos(){
			return $this->kmRecorridos;
		}
	}

?>