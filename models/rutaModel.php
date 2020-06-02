<?php  
	require '../db/conexion.php';
	require 'ruta.php';

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
				$e=new Ruta($row["idRuta"],$row["kilometraje"],$row["latPuntoA"],$row["lngPuntoA"],$row["latPuntoB"],$row["lngPuntoB"],$row["idMotorista"]);
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

		function insertarRuta($e){
			try{
				$para=$this->con->prepare("insert into ruta(kilometraje,latPuntoA,lngPuntoA,latPuntoB,lngPuntoB,idMotorista) values(?,?,?,?,?,?)");
				$para->bind_param('ssssss',$b,$c,$d,$f,$g,$h);
				
				$b=$e->getKilometraje();
				$c=$e->getLatPuntoA();
				$d=$e->getLngPuntoA();
				$f=$e->getLatPuntoB();
				$g=$e->getLngPuntoB();
				$h=$e->getIdMotorista();
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}

		function modificarRuta($e){
			try{
				$para=$this->con->prepare("update ruta set kilometraje=?,latPuntoA=?,lngPuntoA=?,latPuntoB=?,lngPuntoB=?,idMotorista=? where idRuta=?");
				$para->bind_param('sssssss',$a,$b,$c,$d,$f,$g,$h);
				
				$a=$e->getKilometraje();
				$b=$e->getLatPuntoA();
				$c=$e->getLngPuntoA();
				$d=$e->getLatPuntoB();
				$f=$e->getLngPuntoB();
				$g=$e->getIdMotorista();
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