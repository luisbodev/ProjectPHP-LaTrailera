<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dependencias/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="dependencias/jquery.js"></script>
    <script type="text/javascript" src="dependencias/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="dependencias/sweetalert2.all.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo/Logo-LaTrailera.png">
    <script>
        $(document).ready(function(){
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
    
    <title>CRUD Empleado - La Trailera</title>
</head>
<body class="bg-gray-100">
    <header class="text-center">
        <span class="font-bold text-4xl">CRUD Empleado</span>
    </header>
    <section>
    
        
        <div class="container">               
            
                <form action="#" method="POST" id="f" class="px-16 py-4 border-4 border-gray-600 rounded-lg" >
                <div id="d1"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">ID Empleado</span><input type="text" name="idEmpleado" id="idEmpleado" class="form-control" readonly="true">
                        </div>
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">ID Usuario</span><input type="text" name="idUsuarioEmp" id="idUsuarioEmp" class="form-control" readonly="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">Nombre</span><input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">Apellido</span><input type="text" name="apellido" id="apellido" class="form-control" required>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="sexo" class="font-bold text-1xl">Sexo</label>
                                <select class="form-control" name="sexo" id="sexo" required>
                                    <option>Masculino</option>
                                    <option>Femenino</option>	
                                </select>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="cargo" class="font-bold text-1xl">Cargo</label>
                            <select class="form-control" name="cargo" id="cargo" required>
                                <option>Empleado</option>
                                <option>Administrador</option>	
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="direccion" class="font-bold text-1xl">Dirección</label><input type="text" name="direccion" id="direccion" class="form-control" required>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <label for="dui" class="font-bold text-1xl">DUI</label><input type="text" name="dui" id="dui" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nit" class="font-bold text-1xl">NIT</label><input type="text" name="nit" id="nit" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="usuarioEmp" class="font-bold text-1xl">Usuario</label><input type="text" name="usuarioEmp" id="usuarioEmp" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="font-bold text-1xl">Contraseña</label><input type="password" name="password" id="password" class="form-control" required>
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
        </form>
        </div>
               
           
        <br>
            <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Nombre</th>
                            <th scope="col" class="text-center">Apellido</th>
                            <th scope="col" class="text-center">Sexo</th>
                            <th scope="col" class="text-center">Direccion</th>
                            <th scope="col" class="text-center">Cargo</th>
                            <th scope="col" class="text-center">DUI</th>
                            <th scope="col" class="text-center">NIT</th>
                            <th scope="col" class="text-center">ID Usuario</th>
                            <th scope="col" class="text-center">Usuario</th>
                            <th scope="col" class="text-center">Contraseña</th>
                            <th scope="col" class="text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
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
                                
                                echo "
                                    <tr>
                                        <td scope='row'>$idEmpleado</td>
                                        <td>$nombre</td>
                                        <td>$apellido</td>
                                        <td>$sexo</td>
                                        <td>$direccion</td>
                                        <td>$cargo</td>
                                        <td>$dui</td>
                                        <td>$nit</td>
                                        <td>$idUsuarioEmp</td>
                                        <td>$usuarioEmp</td>
                                        <td>$password</td>
                                        <td>
                                            <button onclick=$('#idEmpleado').val('$idEmpleado');$('#nombre').val('$nombre');$('#apellido').val('$apellido');$('#sexo').val('$sexo');$('#direccion').val('$direccion');$('#cargo').val('$cargo');$('#dui').val('$dui');$('#nit').val('$nit');$('#idUsuarioEmp').val('$idUsuarioEmp');$('#usuarioEmp').val('$usuarioEmp');$('#password').val('$password');$('#hiddenPass').val('$password') class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded'>Editar</button>
                                        </td>
                                    </tr>";
                            }
                        ?>
                    </tbody>
                </table> 
            </div>
        </div>

        
        
    </section>
    <footer></footer>
    
</body>
</html>