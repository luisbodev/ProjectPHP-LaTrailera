<?php 
	require '../db/conexion.php';
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
		function insertarEnvio($e){
			try{
				$para=$this->con->prepare("INSERT INTO envio(fechaRealizacion,fechaEntrega,idCliente,idEmpleado) VALUES(?,?,(select idCliente from cliente where idUsuarioCli =? order by idCliente DESC limit 1),(select idEmpleado from empleado where idUsuarioEmp =? order by idEmpleado DESC limit 1))");
				$para->bind_param('ssss',$a,$b,$c,$d);
				$a=$e->getFechaRealizacion();
				$b=$e->getFechaEntrega();
				$c=$e->getIdUsuarioCli();
				$d=$e->getIdUsuarioEmp();
				
				$para->execute();
				if(mysqli_error($this->con)){
					throw new exception("
					<script>
						alert(\"Error al insertar datos de Envio: ".$this->con->error."\");
					</script>");
				}				
			}catch(Exception $ex){
				echo $ex->getMessage();
			}finally{
				$para->close();
			}
		}
		function modificarEnvio($e){
			try{
				$para=$this->con->prepare("UPDATE envio set fechaRealizacion=?, fechaEntrega=?, idCliente=(select idCliente from cliente where idUsuarioCli =? order by idCliente DESC limit 1), idEmpleado=(select idEmpleado from empleado where idUsuarioEmp =? order by idEmpleado DESC limit 1) where idEnvio=?");
                $para->bind_param('sssss',$a,$b,$c,$d,$f);
                $a=$e->getFechaRealizacion();
				$b=$e->getFechaEntrega();
				$c=$e->getIdUsuarioCli();
				$d=$e->getIdUsuarioEmp();
                $f=$e->getIdEnvio();
				
				$para->execute();
				if(mysqli_error($this->con)){
					throw new exception("
					<script>
						alert(\"Error al modificar datos de envio: ".$this->con->error."\");
					</script>");
				}
				
            }catch(Exception $ex) {
				echo $ex->getMessage();
            }finally {
				$para->close();
            }
		}
		function eleminarEnvio($e){
			try{
				$para=$this->con->prepare("DELETE from envio where idEnvio=?");
				$para->bind_param('s',$a);
				$a=$e->getIdEnvio();
				
				
				$para->execute();
				if(mysqli_error($this->con)){
					throw new exception("
					<script>
						alert(\"Error al eliminar envio: ".$this->con->error."\");
					</script>");
				}
			}catch(Exception $ex){
				echo $ex->getMessage();
			}finally{
				$para->close();
			}
			
		}
		function insertarEnvioEmp($e){
			try{
				$para=$this->con->prepare("INSERT INTO envio(fechaRealizacion,fechaEntrega,idCliente,idEmpleado) VALUES(?,?,(select idCliente from cliente where idUsuarioCli =? order by idCliente DESC limit 1),(select idEmpleado from empleado where idUsuarioEmp = (select idUsuarioEmp from usuarioemp where usuarioEmp =? order by idEmpleado DESC limit 1) order by idEmpleado DESC limit 1))");
				$para->bind_param('ssss',$a,$b,$c,$d);
				$a=$e->getFechaRealizacion();
				$b=$e->getFechaEntrega();
				$c=$e->getIdUsuarioCli();
				$d=$e->getUsuarioEmp();
				
				$para->execute();
				if(mysqli_error($this->con)){
					throw new exception("
					<script>
						alert(\"Error al insertar envio: ".$this->con->error."\");
					</script>");
				}				
			}catch(Exception $ex){
				echo $ex->getMessage();
			}finally{
				$para->close();
			}
		}
		
	}
	
	?>