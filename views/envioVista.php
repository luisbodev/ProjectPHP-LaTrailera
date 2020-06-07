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
            // $('#editarbtn').click(function(){
            //     $('#data').append("<?php 
            //                         $datos1 = $obj->getDetalleEnvio($idEnvio);
            //                         foreach ($datos1 as $e) {
            //                         $idDetalleEnvio=$e->getIdDetalleEnvio();
            //                         $idRuta=$e->getIdRuta();
            //                         $idEnvio=$e->getIdEnvio();                    
            //                         echo "<tr><td scope='row'>$idDetalleEnvio</td><td>$idRuta</td><td><button>Cambiar Ruta</button></td></tr>";
            //                     } ?>");
            // });

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
                            <span class="font-bold text-1xl">ID Envio</span>
                            <input type="text" name="idEnvio" id="idEnvio" class="form-control" readonly="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">Fecha Realización</span>
                            <input type="date" name="fechaRealizacion" id="fechaRealizacion" class="form-control" required>
                        </div> 
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">Fecha Entrega</span>
                            <input type="date" name="fechaEntrega" id="fechaEntrega" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">Usario de Cliente que solicito envio</span>
                            <select name="usuarioCli" id="usuarioCli" class="form-control" required>
                                    <option value=""></option>
                                    <?php
                                        foreach ($datosUsuarioCli as $u) {
                                            echo "<option value=".$u['idUsuarioCli'].">".$u['usuarioCli']."</option>";
                                        }
                                    ?>
                            </select>
                        </div> 
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">Usuario Empleado que tomo Envio</span>
                            <select name="usuarioEmp" id="usuarioEmp" class="form-control" required>
                                    <option value=""></option>
                                    <?php
                                        foreach ($datosUsuarioEmpe as $u) {
                                            echo "<option value=".$u['idUsuarioEmp'].">".$u['usuarioEmp']."</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    
                <br>
            
            <center>
                <div class="column col-sm-12 col-md-6">
                <span class="font-bold text-1xl">Detalle de Envio</span>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center">ID</th>
                                    <th scope="col" class="text-center">Id Ruta</th>
                                    <th scope="col" class="text-center">Modificar</th>

                                </tr>
                            </thead>
                            <tbody id='data'>
                            </tbody>
                        </table>
                    </div> 
                </div>
            
            

                <div class="column col-sm-12 col-md-6">
                    <span class="font-bold text-1xl">ID Ruta Seleccionada</span>
                            <select name="ruta" id="ruta" class="form-control" required>
                                    <option value=""></option>
                                    <?php
                                        foreach ($datosRuta as $r) {
                                            echo "<option value=".$r['idRuta'].">".$r['idRuta']."</option>";
                                        }
                                    ?>
                            </select>
                </div>
            </center>
            
                    <!---->
                     <br>   

                    <input type="reset" class="btn btn-primary" value="Nuevo" onclick="$('#g').attr('disabled',false)">
                    <input type="submit" name="guardar" id="g" value="Guardar" class="btn btn-primary" disabled="true">
                    <input type="submit" name="modificar" value="Modificar" class="btn btn-primary">
                    <input type="button" id="eliminar" value="Eliminar" class="btn btn-primary">
        </form>
        </div>
               
        <br>
            <div class="container">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Fecha Realización</th>
                            <th scope="col" class="text-center">Fecha Entrega</th>
                            <th scope="col" class="text-center">Usuario Cliente</th>
                            <th scope="col" class="text-center">Usuario Empleado</th>
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
                                $usuarioCli=$e->getusuarioCli();
                                $usuarioEmp=$e->getusuarioEmp();
                                $idUsuarioCli=$e->getIdUsuarioCli();
                                $idUsuarioEmp=$e->getIdUsuarioEmp();

                                
                                echo "
                                    <tr>
                                        <td scope='row' class='text-center'>$idEnvio</td>
                                        <td class='text-center'>$fechaRealizacion</td>
                                        <td class='text-center'>$fechaEntrega</td>
                                        <td class='text-center'>$usuarioCli</td>
                                        <td class='text-center'>$usuarioEmp</td>
                                        <td class='text-center'>
                                            <button onclick=$('#idEnvio').val('$idEnvio');$('#fechaRealizacion').val('$fechaRealizacion');$('#fechaEntrega').val('$fechaEntrega');$('#usuarioCli').val('$idUsuarioCli');$('#usuarioEmp').val('$idUsuarioEmp');
                                            class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded' id='editarbtn'>Editar</button>    
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
    <script>
        $(document).ready(function(){
            $('#editarbtn').click(function(){
                $('#data').append("<?php 
                                    $datos1 = $obj->getDetalleEnvio($idEnvio);
                                    foreach ($datos1 as $e) {
                                    $idDetalleEnvio=$e->getIdDetalleEnvio();
                                    $idRuta=$e->getIdRuta();
                                    $idEnvio=$e->getIdEnvio();                    
                                    echo "<tr><td scope='row' class='text-center'>$idDetalleEnvio</td><td class='text-center'>$idRuta</td><td class='text-center'><button onclick=$('#ruta').val('$idRuta'); class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded' type='button'>Ver Ruta</button></td></tr>";
                                } ?>");
            });
        });
    </script>
</body>
</html>