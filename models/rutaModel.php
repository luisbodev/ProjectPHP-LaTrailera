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
				$e=new Ruta($row["idRuta"],$row["kilometraje"],$row["puntoPartida"],$row["puntoLlegada"],$row["idMotorista"]);
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
				$para=$this->con->prepare("insert into ruta(kilometraje,puntoPartida,puntoLlegada,idMotorista) values(?,?,?,?)");
				$para->bind_param('ssss',$b,$c,$d,$f);
				
				$b=$e->getKilometraje();
				$c=$e->getPuntoPartida();
				$d=$e->getPuntoLlegada();
				$f=$e->getIdMotorista();
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
		}

		function modificarRuta($e){
			try{
				$para=$this->con->prepare("update ruta set kilometraje=?,puntoPartida=?,puntoLlegada=?,idMotorista=? where idRuta=?");
				$para->bind_param('sssss',$a,$b,$c,$d,$f);
				
				$a=$e->getKilometraje();
				$b=$e->getPuntoPartida();
				$c=$e->getPuntoLlegada();
				$d=$e->getIdMotorista();
				$f=$e->getIdRuta();
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