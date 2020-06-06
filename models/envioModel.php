<?php 
	require '../db/conexion.php';
	require 'envioDetalle.php';
	require 'envio.php';

	class EnvioModel extends Conexion{
		public $error='';

		function __construct(){
			parent:: __construct();
		}

		function getEnvio(){
			$res=$this->con->query("select e.idEnvio, e.fechaRealizacion, e.fechaEntrega, e.idCliente, e.idEmpleado, uc.usuarioCli, ue.usuarioEmp, uc.idUsuarioCli, ue.idUsuarioEmp from envio e
			INNER JOIN cliente c on e.idCliente = c.idCliente
			INNER JOIN usuariocli uc on c.idUsuarioCli = uc.idUsuarioCli
			INNER JOIN empleado emp on e.idEmpleado = emp.idEmpleado
			INNER JOIN usuarioemp ue on emp.idUsuarioEmp = ue.idUsuarioEmp");
			$r=array();
			while($row=$res->fetch_assoc()) {
				$e= new Envio($row['idEnvio'],$row['fechaRealizacion'],$row['fechaEntrega'],$row['idCliente'],$row['idEmpleado'],$row['usuarioCli'],$row['usuarioEmp'],$row['idUsuarioCli'],$row['idUsuarioEmp']);
				$r[]=$e;
			}
			return $r;
			
		}
		function getUsuarioEmp(){
			$res=$this->con->query("select * from usuarioemp");
			$r=array();
			while($row=$res->fetch_assoc()){
				$r[]=$row;
			}
			return $r;
		}
		function getUsuarioCli(){
			$res=$this->con->query("select * from usuariocli");
			$r=array();
			while($row=$res->fetch_assoc()){
				$r[]=$row;
			}
			return $r;
		}
		function getDetalleEnvio($e){
			$res=$this->con->query('select * from detalleenvio where idEnvio ='.$e);
			$r=array();
			while($row=$res->fetch_assoc()) {
				$d= new EnvioDetalle($row['idDetalleEnvio'],$row['idRuta'],$row['idEnvio']);
				$r[]=$d;
			}
			return $r;
		}
	}

?>