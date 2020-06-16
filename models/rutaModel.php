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
				$e=new Ruta($row["idRuta"],$row["kilometraje"],$row["latPuntoA"],$row["lngPuntoA"],$row["latPuntoB"],$row["lngPuntoB"],$row["idMotorista"],$row["idVehiculo"],$row["carga"],$row["descripcion"]);
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

		/*function getCarga(){
			$res=$this->con->query("select * from carga");
			$r=array();
			while($row=$res->fetch_assoc()){
				$c=new Carga($row["idCarga"],$row["descripcion"],$row["peso"]);
				$r[]=$c;
			}
			return $r;
		}*/

		


		function insertarRuta($e){
			try{
				$para=$this->con->prepare("insert into ruta(kilometraje,latPuntoA,lngPuntoA,latPuntoB,lngPuntoB,idMotorista, idVehiculo, carga, descripcion) values(?,?,?,?,?,?,?,?,?)");
				$para->bind_param('sssssssss',$b,$c,$d,$f,$g,$h,$i,$j,$k);
				
				$b=$e->getKilometraje();
				$c=$e->getLatPuntoA();
				$d=$e->getLngPuntoA();
				$f=$e->getLatPuntoB();
				$g=$e->getLngPuntoB();
				$h=$e->getIdMotorista();
				$i=$e->getIdVehiculo();
				$j=$e->getCarga();
				$k=$e->getDescripcion();
				$para->execute();

			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}

		function modificarRuta($e){
			try{
				$para=$this->con->prepare("update ruta set kilometraje=?,latPuntoA=?,lngPuntoA=?,latPuntoB=?,lngPuntoB=?,idMotorista=?, idVehiculo=?, carga=?, descripcion=? where idRuta=?");
				$para->bind_param('ssssssssss',$a,$b,$c,$d,$f,$g,$i,$j,$k,$h);
				
				$a=$e->getKilometraje();
				$b=$e->getLatPuntoA();
				$c=$e->getLngPuntoA();
				$d=$e->getLatPuntoB();
				$f=$e->getLngPuntoB();
				$g=$e->getIdMotorista();
				$i=$e->getIdVehiculo();
				$j=$e->getCarga();
				$k=$e->getDescripcion();
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