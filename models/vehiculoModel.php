<?php  
	require '../db/conexion.php';
	require 'vehiculo.php';

	class VehiculoModel extends Conexion
	{
		public $error="";
		function __construct()
		{
			parent::__construct();
		}

		function getVehiculo(){
			$res=$this->con->query("select * from vehiculo");
			$r=array();
			while($row=$res->fetch_assoc()){
				$e=new Vehiculo($row["idVehiculo"],$row["marca"],$row["placa"],$row["modelo"],$row["tazaCombustible"],$row["capacidadCombustible"],$row["kmRecorridos"]);
				$r[]=$e;
			}
			return $r;
		}

		function insertarVehiculo($e){
			try{
				$para=$this->con->prepare("insert into vehiculo(marca,placa,modelo,tazaCombustible,capacidadCombustible,kmRecorridos) values(?,?,?,?,?,?)");
				$para->bind_param('ssssss',$b,$c,$d,$ee,$f,$g);
				
				$b=$e->getMarca();
				$c=$e->getPlaca();
				$d=$e->getModelo();
				$ee=$e->getTazaCombustible();
				$f=$e->getCapacidadCombustible();
				$g=$e->getKmRecorridos();
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}

		function modificarVehiculo($e){
			try{
				$para=$this->con->prepare("update vehiculo set marca=?,placa=?,modelo=?,tazaCombustible=?,capacidadCombustible=?,kmRecorridos=? where idVehiculo=?");
				$para->bind_param('sssssss',$a,$b,$c,$d,$ee,$f,$g);
				
				$a=$e->getMarca();
				$b=$e->getPlaca();
				$c=$e->getModelo();
				$d=$e->getTazaCombustible();
				$ee=$e->getCapacidadCombustible();
				$f=$e->getKmRecorridos();
				$$g=$e->getIdVehiculo();
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}

		function eliminarVehiculo($e){
			try{
				$para=$this->con->prepare("delete from vehiculo where idVehiculo=?");
				$para->bind_param('s',$a);
				$a=$e->getIdVehiculo();
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}
	}

?> 