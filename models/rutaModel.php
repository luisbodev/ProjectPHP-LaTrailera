<?php  
	require '../db/conexion.php';
	require 'ruta.php';
	require 'vehiculo.php';
	require 'carga.php';

	class RutaModel extends Conexion
	{
		public $error="";
		function __construct()
		{
			parent::__construct();
		}

		function getRuta(){
			$res=$this->con->query("select * from ruta");
			$r=array();
			while($row=$res->fetch_assoc()){
				$e=new Ruta($row["idRuta"],$row["kilometraje"],$row["latPuntoA"],$row["lngPuntoA"],$row["latPuntoB"],$row["lngPuntoB"],$row["idMotorista"],$row["idVehiculo"],$row["idCarga"]);
				$r[]=$e;
			}
			return $r;
		}


		function getMotorista(){
			$res=$this->con->query("select * from motorista");
			$r=array();
			while($row=$res->fetch_assoc()){
				$r[]=$row;
		}
		return $r;
		}

		function getVehiculo(){
			$res=$this->con->query("select * from vehiculo");
			$r=array();
			while($row=$res->fetch_assoc()){
				$v=new Vehiculo($row["idVehiculo"],$row["marca"],$row["placa"],$row["modelo"],$row["tazaCombustible"],$row["capacidadCombustible"],$row["kmRecorridos"]);
				$r[]=$v;
			}
			return $r;
		}

		function getCarga(){
			$res=$this->con->query("select * from carga");
			$r=array();
			while($row=$res->fetch_assoc()){
				$c=new Carga($row["idCarga"],$row["descripcion"],$row["peso"]);
				$r[]=$c;
			}
			return $r;
		}

		


		function insertarRuta($e){
			try{
				$para=$this->con->prepare("insert into ruta(kilometraje,latPuntoA,lngPuntoA,latPuntoB,lngPuntoB,idMotorista, idVehiculo, idCarga) values(?,?,?,?,?,?,?,?)");
				$para->bind_param('ssssssss',$b,$c,$d,$f,$g,$h,$i,$j);
				
				$b=$e->getKilometraje();
				$c=$e->getLatPuntoA();
				$d=$e->getLngPuntoA();
				$f=$e->getLatPuntoB();
				$g=$e->getLngPuntoB();
				$h=$e->getIdMotorista();
				$i=$e->getIdVehiculo();
				$j=$e->getIdCarga();
				$para->execute();

				$res=$this->con->prepare("select * from vehiculo where idVehiculo=?");
				$res->bind_param('s', $i);
				$i=$e->getIdVehiculo();

				$v=" ";
				while($row=$res->fetch_assoc()){
					$v=new Vehiculo($row["idVehiculo"],$row["marca"],$row["placa"],$row["modelo"],$row["tazaCombustible"],$row["capacidadCombustible"],$row["kmRecorridos"]);
				}
				
				$rew=$v->getKmRecorridos();
			
				$rut=$this->con->prepare("update vehiculo set kmRecorridos=? where idVehiculo=?");
				$rut->bind_param('ss',$n,$m);
				$n=$rew;
				$m=$e->getIdVehiculo();
				$rut->execute();

			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}

		function modificarRuta($e){
			try{
				$para=$this->con->prepare("update ruta set kilometraje=?,latPuntoA=?,lngPuntoA=?,latPuntoB=?,lngPuntoB=?,idMotorista=?, idVehiculo=?, idCarga=? where idRuta=?");
				$para->bind_param('sssssssss',$a,$b,$c,$d,$f,$g,$i,$j,$h);
				
				$a=$e->getKilometraje();
				$b=$e->getLatPuntoA();
				$c=$e->getLngPuntoA();
				$d=$e->getLatPuntoB();
				$f=$e->getLngPuntoB();
				$g=$e->getIdMotorista();
				$i=$e->getIdVehiculo();
				$j=$e->getIdCarga();
				$h=$e->getIdRuta();
				
				
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}

		function eliminarRuta($e){
			try{
				$para=$this->con->prepare("delete from ruta where idRuta=?");
				$para->bind_param('s',$a);
				$a=$e->getIdRuta();
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}
	}

?> 