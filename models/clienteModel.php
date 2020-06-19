<?php
    require '../db/conexion.php';
    require_once 'cliente.php';
    

    class ClienteModel extends Conexion{
        public $error=" ";
        function __construct() {
            parent::__construct();
        }

        function getCliente(){
            $res=$this->con->query("select e.idCliente, e.nombre, e.apellido, e.direccion, e.nit, e.numContacto, e.correo, e.idUsuarioCli, u.usuarioCli, u.passwordCli from cliente e INNER JOIN usuariocli u on e.idUsuarioCli = u.idUsuarioCli");
            
            $r=array();
            while($row=$res->fetch_assoc()){   
             $e=new Cliente($row["idUsuarioCli"],$row["usuarioCli"],$row["passwordCli"],$row["idCliente"],$row["nombre"],$row["apellido"],$row["direccion"],$row["nit"],$row["numContacto"],$row["correo"]);
                $r[]=$e;
            }
            return $r;
        }

       
        function insertarCliente($e) {
            try{
                $num=(strlen($e->getUsuarioCli())-3);
                $rest = substr($e->getUsuarioCli(), 0, -($num));//emp

                $res=$this->con->prepare("insert into usuarioCli(usuarioCli,passwordCli) values(?,?)");
                $res->bind_param('ss',$k,$l);
                
                if($rest!="cli")
                $k="cli".$e->getUsuarioCli();
                else
                $k=$e->getUsuarioCli();
                $l=sha1($e->getPasswordCli());
                

                $res->execute();

                $insertCli=mysqli_error($this->con);
                $insertCliente=0;
                if(mysqli_error($this->con)){
                    throw new exception("
                    <script>
                        alert(\"Error al crear Usuario: ".$this->con->error."\");
                    </script>");
                }
                else{
                    $para=$this->con->prepare("insert into cliente(nombre,apellido,direccion,nit,numContacto,correo,idUsuarioCli) values(?,?,?,?,?,?,(select idUsuarioCli from usuariocli order by idUsuarioCli DESC limit 1))");
                    $para->bind_param('ssssss',$b,$w,$o,$h,$f,$g);
                    
                    $b=$e->getNombre();
                    $w=$e->getApellido();
                    $o=$e->getDireccion();
                    $h=$e->getNit();
                    $f=$e->getNumContacto();
                    $g=$e->getCorreo();
                    
                
                    $para->execute();

                    $insertCliente=mysqli_error($this->con);
                    if(mysqli_error($this->con)){
                        throw new exception("
                        <script>
                            alert(\"Error al crear datos de cliente: ".$this->con->error."\");
                        </script>");
                    }
                }
            }catch(Exception $ex) {
                echo $ex->getMessage();
                if($insertCliente){
                    $this->con->query("delete from usuariocli where usuarioCli = '$k'");
                }
            }finally {
                $res->close();
                if(!$insertCli){
                    $para->close();
                }
            }
        }

        function modificarCliente($e) {
            try{

                $res=$this->con->prepare("update usuarioCli set usuarioCli=?, passwordCli=? where idUsuarioCli=?");
                $res->bind_param('sss',$j,$k,$m);
                $j=$e->getUsuarioCli();
                $k=sha1($e->getPasswordCli());
              
                $m=$e->getIdUsuarioCli();
                $res->execute();

                $insertCli=mysqli_error($this->con);
                if(mysqli_error($this->con)){
                    throw new exception("
                    <script>
                        alert(\"Error al modificar Usuario: ".$this->con->error."\");
                    </script>");
                }
                else{
                    $para=$this->con->prepare("update cliente set nombre=?, apellido=?, direccion=?, nit=?, numContacto=?, correo=? where idCliente=?");
                    $para->bind_param('sssssss',$a,$w,$b,$c,$d,$o,$f);
                    $a=$e->getNombre();
                    $w=$e->getApellido();
                    $b=$e->getDireccion();
                    $c=$e->getNit();
                    $d=$e->getNumContacto();
                    $o=$e->getCorreo();
                    $f=$e->getIdCliente();
                    
                    $para->execute();

                    
                    if(mysqli_error($this->con)){
                        throw new exception("
                        <script>
                            alert(\"Error al modificar datos de cliente: ".$this->con->error."\");
                        </script>");
                    }
                }
                


            }catch(Exception $ex) {
                echo $ex->getMessage();
            }finally {
                $res->close();
                if(!$insertCli){
                    $para->close();
                }
            }
            
        }

        function modificarClienteSinPass($e){
            try{

                $res=$this->con->prepare("update usuarioCli set usuarioCli=? where idUsuarioCli=?");
                $res->bind_param('ss',$j,$l);
                $j=$e->getUsuarioCli();
                $l=$e->getIdUsuarioCli();
                $res->execute();

                $insertCli=mysqli_error($this->con);
                if(mysqli_error($this->con)){
                    throw new exception("
                    <script>
                        alert(\"Error al modificar Usuario: ".$this->con->error."\");
                    </script>");
                }
                else{
                    $para=$this->con->prepare("update cliente set nombre=?, apellido=?, direccion=?, nit=?, numContacto=?, correo=? where idCliente=?");
                    $para->bind_param('sssssss',$a,$w,$d,$o,$f,$g,$h);
                    $a=$e->getNombre();
                    $w=$e->getApellido();
                    $d=$e->getDireccion();
                    $o=$e->getNit();
                    $f=$e->getNumContacto();
                    $g=$e->getCorreo();
                    $h=$e->getIdCliente();
                    $para->execute();

                    if(mysqli_error($this->con)){
                        throw new exception("
                        <script>
                            alert(\"Error al modificar datos de cliente: ".$this->con->error."\");
                        </script>");
                    }
                }

            }catch(Exception $ex) {
                echo $ex->getMessage();
            }finally {
                $res->close();
                if(!$insertCli){
                    $para->close();
                }
            }
        }

        function eliminarCliente($e) {
            try{

                $res=$this->con->prepare("delete from usuarioCli where idUsuarioCli=?");
                $res->bind_param('s',$b);
                $b=$e->getIdUsuarioCli();
                $res->execute();

                $insertCli=mysqli_error($this->con);
                if(mysqli_error($this->con)){
                    throw new exception("
                    <script>
                        alert(\"Error al eliminar Usuario: ".$this->con->error."\");
                    </script>");
                }
                else{
                    $para=$this->con->prepare("delete from cliente where idCliente=?");
                    $para->bind_param('s',$a);
                    $a=$e->getIdCliente();
                    $para->execute();

                    if(mysqli_error($this->con)){
                        throw new exception("
                        <script>
                            alert(\"Error al eliminar datos de cliente: ".$this->con->error."\");
                        </script>");
                    }
                }

            }catch(Exception $ex) {
                echo $ex->getMessage();
            }finally {
                $res->close();
                if(!$insertCli){
                    $para->close();
                }
            }
        }
    }

?>