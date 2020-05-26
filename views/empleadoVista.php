

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dependencias/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="dependencias/jquery.js"></script>
    <script type="text/javascript" src="dependencias/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="dependencias/sweetalert2.all.min.js"></script>
    <script>
        $(Document).ready(function(){
            $('#eliminar').click(function(){
                swal.fire({
                    type:"question",
                    title:"¿Desea eliminar registro?",
                    text:"No se prodrá recuperar el registro",
                    showCancelButton:true,
                    cancelButtonColor:"red",
                    ShowConfirmButton:"green",
                    confirmButtonText:"Sí, eliminar"
                }).then((result)=>{
                    if(result.value) {
                        $('#d1').append("<input type='hidden' name='eliminar'>");
                        $('#f').submit();
                    }
                });
            });

        });

       
        function contra() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }

    </script>
    <title>Document</title>
</head>
<body>
    <header>
        <h3>CRUD Empleado</h3>
    </header>
    <section>
    <div class="col-md-6"></div>
            
         <form action="#" method="POST" id="f"><div id="d1"></div>
                <div class="container">               
                   <div class="row">
                        <div class="col-md-3">
                            IDEmpleado <input type="text" name="idEmpleado" id="idEmpleado" class="form-control" readonly="true">
                        </div>
                        <div class="col-md-3">
                            IDUsuario <input type="text" name="idUsuarioEmp" id="idUsuarioEmp" class="form-control" readonly="true">
                        </div>
                        <div class="col-md-3">
                            Nombre <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            Apellido <input type="text" name="apellido" id="apellido" class="form-control" required>
                        </div>   
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="sexo" class="control-label">Sexo</label>
                                <select class="form-control" name="sexo" id="sexo" required>
                                    <option>Masculino</option>
                                    <option>Femenino</option>	
                                </select>
                        </div>
                        
                        <div class="col-md-3">
                            <label for="cargo" class="control-label">Cargo</label>
                            <select class="form-control" name="cargo" id="cargo" required>
                                <option>Empleado</option>
                                <option>Administrador</option>	
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="direccion" class="control-label">Dirección</label><input type="text" name="direccion" id="direccion" class="form-control" required>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                                <label for="dui" class="control-label">DUI</label><input type="text" name="dui" id="dui" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label for="nit" class="control-label">NIT</label><input type="text" name="nit" id="nit" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="usuarioEmp" class="control-label">Usuario</label><input type="text" name="usuarioEmp" id="usuarioEmp" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="control-label">Contraseña</label><input type="password" name="password" id="password" class="form-control" required>
                            <input type="checkbox" onclick="contra()"> Mostrar Contraseña
                            <input type='hidden' name='hiddenPass' id="hiddenPass">
                        </div>
                    </div>
                    <!---->
                     <br>   

                    <input type="reset" class="btn btn-primary" value="Nuevo" onclick="$('#g').attr('disabled',false)">
                    <input type="submit" name="guardar" id="g" value="Guardar" class="btn btn-primary" disabled="true">
                    <input type="submit" name="modificar" value="Modificar" class="btn btn-primary">
                    <input type="button" id="eliminar" value="Eliminar" class="btn btn-primary">
            </div>    
        </form>
               
           
        <br>
        
            <div class="container">
                <div class="row">
                <table class="table table-info">
                        <tr><th>ID Empleado</th><th>Nombre</th><th>Apellido</th><th>Sexo</th><th>Direccion</th><th>Cargo</th><th>DUI</th><th>NIT</th><th>ID Usuario</th><th>Usuario</th><th>Contraseña</th><th>Acción</th></tr>
                        <?php

                            

                            foreach ($datos as $e) {
                                $idUsuarioEmp=$e->getIdUsuarioEmp();
                                $usuarioEmp=$e->getUsuarioEmp();
                                $password=$e->getPassword();
                                //$rol=$e->getRol();
                                $idEmpleado=$e->getIdEmpleado();
                                $nombre=str_replace(" ","&nbsp;",$e->getNombre());
                                $apellido=str_replace(" ","&nbsp;",$e->getApellido());
                                $sexo=$e->getSexo();
                                $direccion=str_replace(" ","&nbsp;",$e->getDireccion());
                                $cargo=$e->getCargo();
                                $dui=$e->getDui();
                                $nit=$e->getNit();

                                

                                
                                echo "<tr><td>$idEmpleado</td><td>$nombre</td><td>$apellido</td><td>$sexo</td><td>$direccion</td><td>$cargo</td><td>$dui</td><td>$nit</td><td>$idUsuarioEmp</td><td>$usuarioEmp</td><td>$password</td><td>
                                <button onclick=$('#idEmpleado').val('$idEmpleado');$('#nombre').val('$nombre');$('#apellido').val('$apellido');$('#sexo').val('$sexo');$('#direccion').val('$direccion');$('#cargo').val('$cargo');$('#dui').val('$dui');$('#nit').val('$nit');$('#idUsuarioEmp').val('$idUsuarioEmp');$('#usuarioEmp').val('$usuarioEmp');$('#password').val('$password');$('#hiddenPass').val('$password') class='btn btn-info'>Editar</button></td></tr>";
                            }
                        ?>
                </table> 
                </div>
            </div>
        
        
    </section>
    <footer></footer>
    
</body>
</html>