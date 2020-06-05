<?php 
	require '../db/conexion.php';
	require 'envio.php';

	class EnvioModel extends Conexion{
		public $error='';

		function __construct(){
			parent:: __construct();
		}

		function getEnvio(){
			$res=$this->con->query('select * from envio');
			$r=array();
			while($row=$res->fetch_assoc()) {
				$e= new Envio($row['idEnvio'],$row['fechaRealizacion'],$row['fechaEntrega'],$row['idCliente'],$row['idEmpleado']);
				$r[]=$e;
			}
			return $r;

		}
	}

?>