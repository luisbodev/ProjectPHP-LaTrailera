<?php  
	require '../db/conexion.php';
	require 'carga.php';

	class CargaModel extends Conexion
	{
		
		public $error="";
		function __construct()
		{
			parent::__construct();
		}

		function getCarga(){
			$res=$this->con->query("select * from carga");
			$r=array();
			while($row=$res->fetch_assoc()){
				$e=new Carga($row["idCarga"],$row["descripcion"],$row["peso"]);
				$r[]=$e;
			}
			return $r;
		}

		function insertarCarga($e){
			try{
				$para=$this->con->prepare("insert into carga(idCarga,descripcion,peso) values(?,?,?)");
				$para->bind_param('sss',$a,$b,$c);
				$a='';
				$b=$e->getDescripcion();
				$c=$e->getPeso();
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}

		function modificarCarga($e){
			try{
				$para=$this->con->prepare("update carga set descripcion=?,peso=? where idCarga=?");
				$para->bind_param('sss',$a,$b,$c);
				$a=$e->getDescripcion();
				$b=$e->getPeso();
				$c=$e->getIdCarga();
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}

		function eliminarCarga($e){
			try{
				$para=$this->con->prepare("delete from carga where idCarga=?");
				$para->bind_param('s',$a);
				$a=$e->getIdCarga();
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}
	}


?>