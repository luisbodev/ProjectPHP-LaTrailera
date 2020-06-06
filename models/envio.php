<?php 
	
	class Envio{
		private $idEnvio;
		private $fechaRealizacion;
		private $fechaEntrega;
		private $idCliente;
		private $idEmpleado;
		private $usuarioCli;
		private $usuarioEmp;
		private $idUsuarioCli;
		private $idUsuarioEmp;

		function __construct($idEnvio,$fechaRealizacion,$fechaEntrega,$idCliente,$idEmpleado,$usuarioCli,$usuarioEmp,$idUsuarioCli,$idUsuarioEmp){
			$this->idEnvio=$idEnvio;
			$this->fechaRealizacion=$fechaRealizacion;
			$this->fechaEntrega=$fechaEntrega;
			$this->idCliente=$idCliente;
			$this->idEmpleado=$idEmpleado;
			$this->usuarioCli=$usuarioCli;
			$this->usuarioEmp=$usuarioEmp;
			$this->idUsuarioCli=$idUsuarioCli;
			$this->idUsuarioEmp=$idUsuarioEmp;
			
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
		function setFechaEntrega($fechaEntrega){
			$this->fechaEntrega=$fechaEntrega;
		}
		function getFechaEntrega(){
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
		function setUsuarioCli($usuarioCli){
			$this->usuarioCli=$usuarioCli;
		}
		function getUsuarioCli(){
			return $this->usuarioCli;
		}
		function setUsuarioEmp($usuarioEmp){
			$this->usuarioEmp=$usuarioEmp;
		}
		function getUsuarioEmp(){
			return $this->usuarioEmp;
		}
		function setIdUsuarioCli($idUsuarioCli){
			$this->idUsuarioCli=$idUsuarioCli;
		}
		function getIdUsuarioCli(){
			return $this->idUsuarioCli;
		}
		function setIdUsuarioEmp($idUsuarioEmp){
			$this->idUsuarioEmp=$idUsuarioEmp;
		}
		function getIdUsuarioEmp(){
			return $this->idUsuarioEmp;
		}
	}
?>