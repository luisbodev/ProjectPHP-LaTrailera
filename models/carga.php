<?php  
	/**
	 * 
	 */
	class Carga
	{
		private $idCarga;
		private $descripcion;
		private $peso;
		function __construct($idCarga,$descripcion,$peso)
		{
			$this->idCarga=$idCarga;
			$this->descripcion=$descripcion;
			$this->peso=$peso;
		}

		function getIdCarga(){
			return $this->idCarga;
		}
		function getDescripcion(){
			return $this->descripcion;
		}
		function getPeso(){
			return $this->peso;
		}
	}
?>