<?php 
	
	class Envio{
		private $idEnvio;
		private $fechaRealizacion;
		private $fechaEntrega;
		private $idCliente;
		private $idEmpleado;

		function __construct($idEnvio,$fechaRealizacion,$fechaEntrega,$idCliente,$idEmpleado){
			$this->idEnvio=$idEnvio;
			$this->fechaRealizacion=$fechaRealizacion;
			$this->fechaEntrega=$fechaEntrega;
			$this->idCliente=$idCliente;
			$this->idEmpleado=$idEmpleado;
		}

		function setIdEnvio($idEnvio){
			$this->idEnvio=$idEnvio;
		}
		function getIdEnvio(){
			return $this->idEnvio;
		}
		function setFechaRealizacion($fechaRealizacion){
			$this->fechaRealizacion=$fechaRealizacion;
		}
		function getFechaRealizacion(){
			return $this->fechaRealizacion;
		}
		function setFechaEngtrega($fechaEntrega){
			$this->fechaEntrega=$fechaEntrega;
		}
		function getFechaEngtrega(){
			return $this->fechaEntrega;
		}
		function setIdCliente($idCliente){
			$this->idCliente=$idCliente;
		}
		function getIdCliente(){
			return $this->idCliente;
		}
		function setIdEmpleado($idEmpleado){
			$this->idEmpleado=$idEmpleado;
		}
		function getIdEmpleado(){
			return $this->idEmpleado;
		}
	}
?>