<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Detalle Envio - La Trailera</title>
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
        <span class="font-bold text-4xl">Gestión Detalle Envio Seleccionado</span>
    </header>
    <section>
    
        
        <div class="container">               
            
                <form action="#" method="POST" id="f" class="px-16 py-4 border-4 border-gray-600 rounded-lg">
                <div id="d1"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">ID Detalle Envio</span>
                            <input type="text" name="idEnvioDetalle" id="idEnvioDetalle" class="form-control" readonly="true">
                        </div>
                        <div class="col-md-6">
                            <span class="font-bold text-1xl">ID Envio</span>
                            <input type="text" name="idEnvio" id="idEnvio" class="form-control" readonly="true" val="<?php echo $e ?>">
                        </div>
                    </div>
                    <div class="row">
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
                    </div>
                    
                <br>
            
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
                            <th scope="col" class="text-center">ID Detalle</th>
                            <th scope="col" class="text-center">ID Ruta</th>
                            <th scope="col" class="text-center">ID Envio</th>
                            <th scope="col" class="text-center">Acción</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($datos1 as $e) {
                                $idDetalleEnvio=$e->getIdDetalleEnvio();
                                $idRuta=$e->getIdRuta();
                                $idEnvio=$e->getIdEnvio();                    
                                echo "<tr>
                                        <td scope='row' class='text-center'>$idDetalleEnvio</td>
                                        <td class='text-center'>$idRuta</td>
                                        <td class='text-center'>$idEnvio</td>
                                        <td class='text-center'>
                                            <button onclick=$('#idEnvioDetalle').val('$idDetalleEnvio');$('#ruta').val('$idRuta');$('#idEnvio').val('$idEnvio'); class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded' type='button'>Ver Ruta</button>
                                        </td>
                                        </tr>";
                             } 
                            // foreach ($datos as $e) {
                            //     $idEnvio=$e->getIdEnvio();
                            //     $fechaRealizacion=$e->getFechaRealizacion();
                            //     $fechaEntrega=$e->getFechaEntrega();
                            //     $idCliente=$e->getIdCliente();
                            //     $idEmpleado=$e->getIdEmpleado();
                            //     $usuarioCli=$e->getusuarioCli();
                            //     $usuarioEmp=$e->getusuarioEmp();
                            //     $idUsuarioCli=$e->getIdUsuarioCli();
                            //     $idUsuarioEmp=$e->getIdUsuarioEmp();

                                
                            //     echo "
                            //         <tr>
                            //             <td scope='row' class='text-center'>$idEnvio</td>
                            //             <td class='text-center'>$fechaRealizacion</td>
                            //             <td class='text-center'>$fechaEntrega</td>
                            //             <td class='text-center'>$usuarioCli</td>
                            //             <td class='text-center'>$usuarioEmp</td>
                            //             <td class='text-center'>
                            //                 <button onclick=$('#idEnvio').val('$idEnvio');$('#fechaRealizacion').val('$fechaRealizacion');$('#fechaEntrega').val('$fechaEntrega');$('#usuarioCli').val('$idUsuarioCli');$('#usuarioEmp').val('$idUsuarioEmp'); class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded' id='editarbtn'>Editar</button>    
                            //                 </td>
                                        
                            //         </tr>";
                            // }
                            
                        ?>
                    </tbody>
                </table> 
            </div>
        </div>
        
    </section>
    <footer></footer>
</body>
</html>