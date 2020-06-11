<?php 
	require '../db/conexion.php';
	require 'envioDetalle.php';

	class DetalleEnvioModel extends Conexion{
		public $error='';

		function __construct(){
			parent:: __construct();
		}
		function getDetalleEnvio($e){
			$res=$this->con->query('select * from detalleenvio where idEnvio ='.$e);
			$r=array();
			while($row=$res->fetch_assoc()) {
				$d= new EnvioDetalle($row['idDetalleEnvio'],$row['idRuta'],$row['idEnvio']);
				$r[]=$d;
			}
			return $r;
		}
		function getRuta(){
			$res=$this->con->query("select * from ruta");
			$r=array();
			while($row=$res->fetch_assoc()){
				$r[]=$row;
			}
			return $r;
        }
        function insertarDetalleEnvio($d){
			try{
				$detalle=$this->con->prepare('insert into detalleenvio(idRuta,idEnvio) values(?,?)');
				$detalle->bind_param('ss',$a,$b);
				$a=$d->getIdRuta();
                $b=$d->getIdEnvio();
                
				$detalle->execute();
				
			}catch(Exception $ex){
				return $ex;
			}finally{
				$detalle->close();
			}
        }
        function modificarDetalleEnvio($d){
			try{
				$para=$this->con->prepare("UPDATE detalleenvio set idRuta=?, idEnvio=? where idDetalleEnvio =?");
                $para->bind_param('sss',$a,$b,$c);
                $a=$d->getIdRuta();
                $b=$d->getIdEnvio();
                $c=$d->getIdDetalleEnvio();
				
                $para->execute();
				
            }catch(Exception $ex) {
				return $ex;
            }finally {
				$para->close();
            }
        }
        function eleminarDetalleEnvio($d){
			try{
				$para=$this->con->prepare("DELETE from detalleenvio where idDetalleEnvio=?");
				$para->bind_param('s',$a);
				$a=$d->getIdDetalleEnvio();
				
				$para->execute();
			}catch(Exception $ex){
				return $ex;
			}finally{
				$para->close();
			}
			
		}
	}
	
	?>