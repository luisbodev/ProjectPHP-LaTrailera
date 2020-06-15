<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Vehículo - La Trailera</title>
    <!--Dependencias-->
    <!-- <link rel="stylesheet" type="text/css" href="dependencias/bootstrap/css/bootstrap.css"> -->
    <script type="text/javascript" src="dependencias/jquery.js"></script>
    <!-- <script type="text/javascript" src="dependencias/bootstrap/js/bootstrap.js"></script> -->
    <script type="text/javascript" src="dependencias/sweetalert2.all.min.js"></script>
    <!-- Tailwind -->
    <link rel="stylesheet" href="dependencias/tailwind.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/menu.css">
    <!--Logo-->
    <link rel="icon" type="image/png" href="img/logo/Logo-LaTrailera.png">
    <!--Validaciones-->
    <script src="validaciones/validarVe.js"></script>
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
    <?php
        $currentPage='Vehiculo';
        require 'menu/menuAdmin.php';
    ?>
    <div class='text-center'>
        <span class="font-bold text-4xl">Gestión de Vehículo</span>
    </div>
<center>
    <section>
        <div class="container">
                <form action="#" id="f"  method="POST"class='px-16 py-4 border-4 border-gray-600 rounded-lg' onsubmit="return validar();">
                <div id="d1"></div>
                    <center>
                        <div class="w-full md:w-1/2">
                            <span class="font-bold text-xl">ID</span>
                            <input type="text" name="idVehiculo" id="idVehiculo" class="bg-gray-400 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true"><br>

                        </div>  
                    </center>
                    <div class='md:flex'>
                        <div class="w-full md:w-1/2">
                            <span class="font-bold text-xl">Marca</span>
                            <input type="text" name="marca" id="marca" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                            <span class="font-bold text-xl">Placa</span>
                            <input type="text" name="placa" id="placa" placeholder="C000-000" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                            <span class="font-bold text-xl">Modelo</span>
                            <input type="text" name="modelo" id="modelo" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                        </div>
                        <div class="w-full md:w-1/2 md:ml-2">
                            <span class="font-bold text-xl">Taza de Combustible</span>
                            <input type="text" name="tazaCombustible" id="tazaCombustible" placeholder="00.00"  class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                            <span class="font-bold text-xl">Capacidad del Vehículo</span>
                            <input type="text" name="capacidadCombustible" id="capacidadCombustible" placeholder="00.00" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                            <span class="font-bold text-xl">Kilometros Recorridos</span>
                            <input type="text" name="kmRecorridos" id="kmRecorridos" placeholder="00.00" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                        </div>
                    </div>
                    <div class='md:flex'>
                        <div class='w-full'>
                        <input type="reset"  class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded" value="Nuevo" onclick="$('#g').attr('disabled',false);desactivar()">
                        <input type="submit" name="guardar" id="g" value="Guardar" class="bg-blue-400 text-white text-xl mt-2 py-1 px-2 rounded cursor-not-allowed" disabled='true'>
                        <input type="submit" name="modificar" value="Modificar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
                        <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
                        </div>
                    </div>
                </form>
                 <br>
                        <table class="table-auto">
                            <thead>
                               <th class="text-center text-white bg px-4 py-2">ID</th>
                               <th class="text-center text-white bg px-4 py-2">Marca</th>
                               <th class="text-center text-white bg px-4 py-2">Placa</th>
                               <th class="text-center text-white bg px-4 py-2">Modelo</th>
                               <th class="text-center text-white bg px-4 py-2">Taza de Combustible</th>
                               <th class="text-center text-white bg px-4 py-2">Capacidad</th>
                               <th class="text-center text-white bg px-4 py-2">KM</th>
                               <th class="text-center text-white bg px-4 py-2">Acción</th>
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
                                                <td class='border-b-4 border-gray-600 rounded-lg text-center font-bold px-4 py-2'>$idVehiculo</td>
                                                <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$marca</td>
                                                <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$placa</td>
                                                <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$modelo</td>
                                                <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$tazaCombustible</td>
                                                <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$capacidadCombustible</td>
                                                <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$kmRecorridos</td>
                                                <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'><button onclick=$('#idVehiculo').val('$idVehiculo');$('#marca').val('$marca');$('#placa').val('$placa');$('#modelo').val('$modelo');$('#tazaCombustible').val('$tazaCombustible');$('#capacidadCombustible').val('$capacidadCombustible');$('#kmRecorridos').val('$kmRecorridos') class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded'>Editar</button></td>
                                                </tr>";
                                    }
                                ?>
                           </tbody>
                        </table>

            
        </div>
    </section>
</center>
<br>
    <footer>
    
    </footer>
    <script>
            function desactivar(){
                var btn = document.getElementById('g');
                btn.classList.remove('cursor-not-allowed','bg-blue-400');
                btn.classList.add('bg-blue-700','hover:bg-red-800');


            }
        </script>
</body>
</html>