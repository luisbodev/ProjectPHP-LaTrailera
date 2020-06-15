<?php 
	require '../db/conexion.php';
	require 'envio.php';

	class EnvioModel extends Conexion{
		public $error='';

		function __construct(){
			parent:: __construct();
		}

		function getEnvio($e){
			$res=$this->con->query("select e.idEnvio, e.fechaRealizacion, e.fechaEntrega, e.idCliente, e.idEmpleado, uc.usuarioCli, ue.usuarioEmp, uc.idUsuarioCli, ue.idUsuarioEmp from envio e
			INNER JOIN cliente c on e.idCliente = c.idCliente
			INNER JOIN usuariocli uc on c.idUsuarioCli = uc.idUsuarioCli
			INNER JOIN empleado emp on e.idEmpleado = emp.idEmpleado
            INNER JOIN usuarioemp ue on emp.idUsuarioEmp = ue.idUsuarioEmp
            where uc.usuarioCli = '".$e."'");
			$r=array();
			while($row=$res->fetch_assoc()) {
				$e= new Envio($row['idEnvio'],$row['fechaRealizacion'],$row['fechaEntrega'],$row['idCliente'],$row['idEmpleado'],$row['usuarioCli'],$row['usuarioEmp'],$row['idUsuarioCli'],$row['idUsuarioEmp']);
				$r[]=$e;
			}
			return $r;
			
		}
	}
	
?>