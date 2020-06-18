<?php  
	require '../db/conexion.php';
	require 'ruta.php';
	require 'vehiculo.php';
	require 'carga.php';
	require 'rutaVehi.php';

	

	class RutaModel extends Conexion
	{
		public $error="";
		function __construct()
		{
			parent::__construct();
		}

		function getRuta(){
			$res=$this->con->query("SELECT r.idRuta, r.kilometraje, r.latPuntoA, r.lngPuntoA, r.latPuntoB, r.lngPuntoB, r.idMotorista, r.idVehiculo, r.carga, r.descripcion, v.kmRecorridos FROM ruta r INNER JOIN vehiculo v ON r.idVehiculo = v.idVehiculo");
			$r=array();
			while($row=$res->fetch_assoc()){
				$e=new RutaVehi($row["idRuta"],$row["kilometraje"],$row["latPuntoA"],$row["lngPuntoA"],$row["latPuntoB"],$row["lngPuntoB"],$row["idMotorista"],$row["idVehiculo"],$row["carga"],$row["descripcion"],$row["kmRecorridos"]);
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
				$ban=1;
				$para=$this->con->prepare("insert into ruta(kilometraje,latPuntoA,lngPuntoA,latPuntoB,lngPuntoB,idMotorista, idVehiculo, carga, descripcion) values(?,?,?,?,?,?,?,?,?)");
				$para->bind_param('sssssssss',$b,$c,$d,$f,$g,$h,$i,$j,$k);
				
				$res=$this->con->prepare("UPDATE vehiculo SET kmRecorridos=?+(Select kmRecorridos from vehiculo where idVehiculo=?) where idVehiculo=?");
				$res->bind_param('sss', $b,$i,$i);

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
				$res->execute();

				
				
				

			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}

		function modificarRuta($e){
			try{
				$para=$this->con->prepare("UPDATE ruta set kilometraje=?,latPuntoA=?,lngPuntoA=?,latPuntoB=?,lngPuntoB=?,idMotorista=?, idVehiculo=?, carga=?, descripcion=? where idRuta=?");
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

				$res=$this->con->query("UPDATE vehiculo SET kmRecorridos=$a-(select kilometraje from ruta where idRuta=$h)+(Select kmRecorridos from vehiculo where idVehiculo=$i) where idVehiculo=$i");
				
				$para->execute();
				
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}

		function modificarRutaSinKm($e){
			try{
				$para=$this->con->prepare("UPDATE ruta set kilometraje=?,latPuntoA=?,lngPuntoA=?,latPuntoB=?,lngPuntoB=?,idMotorista=?, idVehiculo=?, carga=?, descripcion=? where idRuta=?");
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

				$res=$this->con->query("UPDATE vehiculo SET kmRecorridos=$a-(select kilometraje from ruta where idRuta=$h)+(Select kmRecorridos from vehiculo where idVehiculo=$i) where idVehiculo=$i");
				
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
				$i=$e->getIdVehiculo();


				$res=$this->con->query("UPDATE vehiculo SET kmRecorridos=(Select kmRecorridos from vehiculo where idVehiculo=$i)-(select kilometraje from ruta where idRuta=$a) where idVehiculo=$i");
				
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}
	}

?> 