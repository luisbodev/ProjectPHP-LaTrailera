<?php  
	require '../db/conexion.php';
	

	

	class Reporte extends Conexion
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
		
	}

?> 