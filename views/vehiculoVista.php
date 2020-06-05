<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Vehículo - La Trailera</title>
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

    <script src="validar11.js"></script>
    <script type="text/javascript">
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
<body>
    <header class='text-center'>
        <span class="font-bold text-4xl">Gestión de Vehículo</span>
    </header>
    
    <section>
        <div class="container">
                <form action="#" id="f"  method="POST"class='px-16 py-4 border-4 border-gray-600 rounded-lg'>
                    <center>
                        <div class="col-sm-12 col-md-6">
                            <span class="font-bold text-1xl">ID</span><input type="text" name="idVehiculo" id="idVehiculo" class="form-control" readonly="true"><br>

                        </div>  
                    </center>
                    <div class='row'>
                        <div class="col-sm-12 col-md-6">
                            <span class="font-bold text-1xl">Marca</span>
                            <input type="text" name="marca" id="marca" class="form-control"><br>
                            <span class="font-bold text-1xl">Placa</span>
                            <input type="text" name="placa" id="placa" class="form-control"><br>
                            <span class="font-bold text-1xl">Modelo</span>
                            <input type="text" name="modelo" id="modelo" class="form-control"><br>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <span class="font-bold text-1xl">Taza de Combustible</span>
                            <input type="text" name="tazaCombustible" id="tazaCombustible" class="form-control"><br>
                            <span class="font-bold text-1xl">Capacidad</span>
                            <input type="text" name="capacidadCombustible" id="capacidadCombustible" class="form-control"><br>
                            <span class="font-bold text-1xl">Kilometros Recorridos</span>
                            <input type="text" name="kmRecorridos" id="kmRecorridos" class="form-control"><br>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-12'>
                            <input type="reset"  class="btn btn-primary" value="Nuevo" onclick="$('#g').attr('disabled',false)">
                            <input type="submit" name="insertar" id="g" value="Guardar" class="btn btn-primary" disabled="true">
                            <input type="submit" name="modifi" id="modifi" value="Modificar" class="btn btn-primary">
                            <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="btn btn-primary">
                        </div>
                    </div>
                </form>
                 <br>
                <div class='container'>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class='thead-dark'>
                               <th scope="col" class="text-center">ID</th>
                               <th scope="col" class="text-center">Marca</th>
                               <th scope="col" class="text-center">Placa</th>
                               <th scope="col" class="text-center">Modelo</th>
                               <th scope="col" class="text-center">Taza de Combustible</th>
                               <th scope="col" class="text-center">Capacidad</th>
                               <th scope="col" class="text-center">KM</th>
                               <th scope="col" class="text-center">Acción</th>
                           </thead>
                           <tbody>
                                <?php  
                                    foreach ($datos as $e) {
                                        $idVehiculo=$e->getIdVehiculo();
                                        $marca=$e->getMarca();
                                        $placa=$e->getPlaca();
                                        $modelo=$e->getModelo();
                                        $tazaCombustible=$e->getTazaCombustible();
                                        $capacidadCombustible=$e->getCapacidadCombustible();
                                        $kmRecorridos=$e->getKmRecorridos();
            
                                        echo "<tr>
                                                <td scope='row' class='text-center'>$idVehiculo</td>
                                                <td class='text-center'>$marca</td>
                                                <td class='text-center'>$placa</td>
                                                <td class='text-center'>$modelo</td>
                                                <td class='text-center'>$tazaCombustible</td>
                                                <td class='text-center'>$capacidadCombustible</td>
                                                <td class='text-center'>$kmRecorridos</td>
                                                <td class='text-center'><button onclick=$('#idVehiculo').val('$idVehiculo');$('#marca').val('$marca');$('#placa').val('$placa');$('#modelo').val('$modelo');$('#tazaCombustible').val('$tazaCombustible');$('#capacidadCombustible').val('$capacidadCombustible');$('#kmRecorridos').val('$kmRecorridos') class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded'>Editar</button></td>
                                                </tr>";
                                    }
                                ?>
                           </tbody>
                        </table>
                    </div>
                </div>

            
        </div>
    </section>
    <footer>
    
    </footer>

</body>
</html>