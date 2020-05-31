<?php
    require '../db/conexion.php';
    require_once 'empleado.php';
    

    class EmpleadoModel extends Conexion{
        public $error=" ";
        function __construct() {
            parent::__construct();
        }

        function getEmpleado() {
            $res=$this->con->query("select e.idEmpleado, e.nombre, e.apellido, e.sexo, e.direccion, e.cargo, e.dui, e.nit, e.idUsuarioEmp, u.usuarioEmp, u.password from empleado e INNER JOIN usuarioemp u on e.idUsuarioEmp = u.idUsuarioEmp");
            
            $r=array();
            while($row=$res->fetch_assoc()){
                $e=new Empleado($row["idUsuarioEmp"],$row["usuarioEmp"],$row["password"],$row["cargo"],$row["idEmpleado"],$row["nombre"],$row["apellido"],$row["sexo"],$row["direccion"],$row["cargo"],$row["dui"],$row["nit"]);
                $r[]=$e;
            }
            return $r;
        }

       
        function insertarEmpleado($e) {
            try{
                $num=(strlen($e->getUsuarioEmp())-3);
                $rest = substr($e->getUsuarioEmp(), 0, -($num));//emp

                $res=$this->con->prepare("insert into usuarioEmp(usuarioEmp,password,rol) values(?,?,?)");
                $res->bind_param('sss',$k,$l,$m);
                
                if($rest!="emp")
                $k="emp".$e->getUsuarioEmp();
                else
                $k=$e->getUsuarioEmp();
                $l=sha1($e->getPassword());
                $m=$e->getRol();

                $res->execute();

                
                
                
                

                $para=$this->con->prepare("insert into empleado(nombre,apellido,sexo,direccion,cargo,dui,nit,idUsuarioEmp) values(?,?,?,?,?,?,?,(select idUsuarioEmp from usuarioemp order by idUsuarioEmp DESC limit 1))");
                $para->bind_param('sssssss',$b,$c,$d,$o,$f,$g,$h);
                
                $b=$e->getNombre();
                $c=$e->getApellido();
                $d=$e->getSexo();
                $o=$e->getDireccion();
                $f=$e->getCargo();
                $g=$e->getDui();
                $h=$e->getNit();
            
                $para->execute();
                
                
            }catch(Exception $ex) {
                return $ex;
            }finally {
                $res->close();
                $para->close();
            }
        }

        function modificarEmpleado($e) {
            try{

                $res=$this->con->prepare("update usuarioEmp set usuarioEmp=?, password=?, rol=? where idUsuarioEmp=?");
                $res->bind_param('ssss',$j,$k,$l,$m);
                $j=$e->getUsuarioEmp();
                $k=sha1($e->getPassword());
                $l=$e->getRol();
                $m=$e->getIdUsuarioEmp();
                $res->execute();

                $para=$this->con->prepare("update empleado set nombre=?, apellido=?, sexo=?, direccion=?, cargo=?, dui=?, nit=? where idEmpleado=?");
                $para->bind_param('ssssssss',$a,$b,$c,$d,$o,$f,$g,$h);
                $a=$e->getNombre();
                $b=$e->getApellido();
                $c=$e->getSexo();
                $d=$e->getDireccion();
                $o=$e->getCargo();
                $f=$e->getDui();
                $g=$e->getNit();
                $h=$e->getIdEmpleado();
                $para->execute();

            }catch(Exception $ex) {
                return $ex;
            }finally {
                $para->close();
                $res->close();
            }
            
        }

        function modificarEmpleadoSinPass($e){
            try{

                $res=$this->con->prepare("update usuarioEmp set usuarioEmp=?, rol=? where idUsuarioEmp=?");
                $res->bind_param('sss',$j,$k,$l);
                $j=$e->getUsuarioEmp();
                $k=$e->getRol();
                $l=$e->getIdUsuarioEmp();
                $res->execute();

                $para=$this->con->prepare("update empleado set nombre=?, apellido=?, sexo=?, direccion=?, cargo=?, dui=?, nit=? where idEmpleado=?");
                $para->bind_param('ssssssss',$a,$b,$c,$d,$o,$f,$g,$h);
                $a=$e->getNombre();
                $b=$e->getApellido();
                $c=$e->getSexo();
                $d=$e->getDireccion();
                $o=$e->getCargo();
                $f=$e->getDui();
                $g=$e->getNit();
                $h=$e->getIdEmpleado();
                $para->execute();

            }catch(Exception $ex) {
                return $ex;
            }finally {
                $para->close();
                $res->close();
            }
        }

        function eliminarEmpleado($e) {
            try{

                $res=$this->con->prepare("delete from usuarioEmp where idUsuarioEmp=?");
                $res->bind_param('s',$b);
                $b=$e->getIdUsuarioEmp();
                $res->execute();

                $para=$this->con->prepare("delete from empleado where idEmpleado=?");
                $para->bind_param('s',$a);
                $a=$e->getIdEmpleado();
                $para->execute();
            }catch(Exception $ex) {
                return $ex;
            }finally {
                $para->close();
                $res->close();
            }
        }
    }

?>