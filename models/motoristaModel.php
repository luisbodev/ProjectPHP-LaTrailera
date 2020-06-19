<?php  
	require '../db/conexion.php';
	require 'motorista.php';

	class MotoristaModel extends Conexion
	{
		public $error="";
		function __construct()
		{
			parent::__construct();
		}

		function getMotorista(){
			$res=$this->con->query("select * from motorista");
			$r=array();
			while($row=$res->fetch_assoc()){
				$e=new Motorista($row["idMotorista"],$row["nombre"],$row["apellido"],$row["direccion"],$row["dui"],$row["nit"],$row["numLicencia"]);
				$r[]=$e;
			}
			return $r;
		}

		function insertarMotorista($e){
			try{
				$para=$this->con->prepare("insert into motorista(nombre,apellido,direccion,dui,nit,numLicencia) values(?,?,?,?,?,?)");
				$para->bind_param('ssssss',$b,$c,$d,$ee,$f,$g);
				
				$b=$e->getNombre();
				$c=$e->getApellido();
				$d=$e->getDireccion();
				$ee=$e->getDui();
				$f=$e->getNit();
				$g=$e->getNumLicencia();

				$para->execute();
				if(mysqli_error($this->con)){
					throw new exception("
					<script>
						alert(\"Error al insertar datos de Motorista: ".$this->con->error."\");
					</script>");
				}
			}catch(Exception $ex){
				echo $ex->getMessage();
			}finally{
				$para->close();
			}
		}

		function modificarMotorista($e){
			try{
				$para=$this->con->prepare("update motorista set nombre=?,apellido=?,direccion=?,dui=?,nit=?,numLicencia=? where idMotorista=?");
				$para->bind_param('sssssss',$a,$b,$c,$d,$ee,$f,$g);
				
				$a=$e->getNombre();
				$b=$e->getApellido();
				$c=$e->getDireccion();
				$d=$e->getDui();
				$ee=$e->getNit();
				$f=$e->getNit();
				$g=$e->getIdMotorista();
				$para->execute();

				if(mysqli_error($this->con)){
					throw new exception("
					<script>
						alert(\"Error al modificar datos de Motorista: ".$this->con->error."\");
					</script>");
				}
			}catch(Exception $ex){
				echo $ex->getMessage();
			}finally{
				$para->close();
			}
		}

		function eliminarMotorista($e){
			try{
				$para=$this->con->prepare("delete from motorista where idMotorista=?");
				$para->bind_param('s',$a);
				$a=$e->getIdMotorista();
				$para->execute();

				if(mysqli_error($this->con)){
					throw new exception("
					<script>
						alert(\"Error al eliminar Motorista: ".$this->con->error."\");
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