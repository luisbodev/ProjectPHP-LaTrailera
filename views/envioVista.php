<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Envio - La Trailera</title>
    <!--Dependencias-->
    <link rel="stylesheet" type="text/css" href="dependencias/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="dependencias/jquery.js"></script>
    <script type="text/javascript" src="dependencias/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="dependencias/sweetalert2.all.min.js"></script>
    <!-- Tailwind -->
    <link rel="stylesheet" href="dependencias/tailwind.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/menu.css">
    <!--Logo-->
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

       

    </script>
</head>
<body class="bg-gray-100">
    <header class="text-center">
        <span class="font-bold text-4xl">Gestión Envio</span>
    </header>
    <section>
    
        
        <div class="container">               
            
                <form action="#" method="POST" id="f" class="px-16 py-4 border-4 border-gray-600 rounded-lg" onsubmit="return validar(this);">
                <div id="d1"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">ID Envio</span><input type="text" name="idCliente" id="idCliente" class="form-control" readonly="true">
                        </div>
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">ID Usuario</span><input type="text" name="idUsuarioCli" id="idUsuarioCli" class="form-control" readonly="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">Nombre</span><input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>   
                    </div>
                    <div class="row">
                        
                        

                        <div class="col-md-12">
                            <label for="direccion" class="font-bold text-1xl">Dirección</label><input type="text" name="direccion" id="direccion" class="form-control" required>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <label for="nit" class="font-bold text-1xl">NIT</label><input type="text" name="nit" id="nit" class="form-control" required placeholder="0000-000000-000-0" >
                        </div>
                        <div class="col-md-6">
                            <label for="numContacto" class="font-bold text-1xl">Numero de Contacto</label><input type="text" name="numContacto" id="numContacto" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="correo" class="font-bold text-1xl">Correo</label><input type="text" name="correo" id="correo" class="form-control" required placeholder="@dominio.com" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="usuarioCli" class="font-bold text-1xl">Usuario</label><input type="text" name="usuarioCli" id="usuarioCli" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="passwordCli" class="font-bold text-1xl">Contraseña</label><input type="passwordCli" name="passwordCli" id="passwordCli" class="form-control" required>
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
                            <th scope="col" class="text-center">Fecha Realización</th>
                        
                            <th scope="col" class="text-center">Fecha Entrega</th>
                            <th scope="col" class="text-center">Id Cliente</th>
                            <th scope="col" class="text-center">Id Empleado</th>
                            <th scope="col" class="text-center">Acción</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($datos as $e) {
                                $idEnvio=$e->getIdEnvio();
                                $fechaRealizacion=$e->getFechaRealizacion();
                                $fechaEntrega=$e->getFechaEntrega();
                                $idCliente=$e->getIdCliente();
                                $idEmpleado=$e->getIdEmpleado();
                                
                                echo "
                                    <tr>
                                        <td scope='row'>$idEnvio</td>
                                        <td>$fechaRealizacion</td>
                                        <td>$fechaEntrega</td>
                                        <td>$idCliente</td>
                                        <td>$idEmpleado</td>
                                        
                                    <td>
                                            <button onclick=$('#idCliente').val('$idCliente');$('#nombre').val('$nombre');$('#direccion').val('$direccion');$('#nit').val('$nit');$('#numContacto').val('$numContacto');$('#correo').val('$correo');$('#idUsuarioCli').val('$idUsuarioCli');$('#usuarioCli').val('$usuarioCli');$('#passwordCli').val('$passwordCli');$('#hiddenPass').val('$passwordCli') class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded'>Ver Detalles</button>
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