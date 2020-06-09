<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Ruta - La Trailera</title>
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
     <style>
      /* Tamaño del div del mapa. */
      #map {
        height: 100%;
      }
      
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #contenedor{
        height: 300px;
      }
      #btnDibujarRuta{
        margin-top: 3px;
      }

    </style>
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
    <header class="flex">
    <div class="bg md:flex md:justify-between md:px-2 md:py-1 md:items-center w-screen">
        <div class="flex items-center justify-between px-2 py-1 md:px-0 md:py-0">
            <div class="flex items-center">
                <a href="../index.php"><img class="h-12" src="img/logo/Logo-LaTrailera2.svg" alt="Logo La Trailera"></a>
            </div>
            <a href="../index.php"><h1 class="text-white text-2xl font-bold">LA TRAILERA</h1></a>
            <div class="md:hidden">
                <button  type="button" class="block text-white focus:outline-none hover:text-gray-400" onclick="menu()">
                    <svg id="cerrar" style="display: none;" class="h-6 w-6 fill-current bi bi-x-octagon" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"/></svg>

                    <svg id="abrir" class="h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>					
            </div>
        </div>
            <div id="opciones" class="hidden px-1 pb-1 md:flex md:p-0">
            <a href="#" class="block px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200">Inicio</a>
                <a href="controlEnvio.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Envios</a>
                <a href="controlCarga.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Carga</a>
                <a href="controlRuta.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Ruta</a>
                <a href="controlVehiculo.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Vehiculo</a>
                <a href="controladorMotorista.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Motorista</a>
                <a href="controlCliente.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Cliente</a>
                <a href="controlEmpleado.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Empleado</a>
                <a href="controlRuta.php?c=1" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Cerrar Sesión</a>
                <div class="block mt-1 px-2 text-gray-800 bg-yellow-500 font-semibold rounded md:mt-0 md:ml-2">Usuario: <span id="userName" class="underline"></span></div>
            </div>
        </div>
    </header>
    <div class="text-center">
        <span class="font-bold text-4xl">Gestión Ruta</span>
    </div>
<center class='h-auto'>
  <section class='h-auto'>
  <div class="container h-auto">
  <div class='class="px-16 py-4 border-4 border-gray-600 rounded-lg h-auto'>
      <center id='contenedor' class='w-full'>
          <div class="w-full md:w-1/2 mb-2">
                <input type="button" value="Obtener mi hubicación" onclick="get_my_location();" class="bg-orange-500 hover:bg-blue-700 text-white text-xl mt-2 py-1 px-2 rounded">
          </div>
          <div id="output" class='w-11/12 md:w-1/2'></div>
          <div id="map" class='w-11/12 md:w-1/2'></div>
      </center>
    <br>
    <br>
    <div class='container w-11/12'>
    <form action="#" id="f" method="POST">
    <div id="d1"></div>
     <br>
        <div class='w-full md:w-1/2'>
          <input type="button" value="Agregar Ruta" id="btnMark" onclick="initMap(); $('#my_lat').val(' ');$('#my_lng').val('');$('#your_lat').val('');$('#your_lng').val('');" class="bg-green-500 hover:bg-red-700 text-white text-xl mt-2 py-1 px-2 rounded">
        </div>
        <div class="md:flex">
          <div class="w-full md:w-1/2">
            <span class="font-bold text-xl">Punto de Partida</span><br>
            <input type="text" required placeholder="Latitud" name="my_lat"  id="my_lat" class="mb-1 bg-gray-200 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true">
            <input type="text" required placeholder="Longitud" name="my_lng" id="my_lng" class="bg-gray-200 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly>
          
          </div>
          
          <div class="w-full md:w-1/2 md:ml-2">
            <span class="font-bold text-xl">Punto de Llegada</span><br>
            <input type="text" required  class="mb-1 bg-gray-200 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" name="your_lat" id="your_lat" placeholder="Latitud" readonly>
            <input type="text"  class="bg-gray-200 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" name="your_lng" id="your_lng" placeholder="Longitud" required readonly>
          </div>
        </div>
        <div class='md:flex'>
        <div class="w-full md:w-1/2">
              <!--<input type="button" value="obtener kms" class="btn btn-success" onclick="obtenerKmts()">-->
              <span class="font-bold text-xl">Kilometraje</span><br>
              <input type="text" class="bg-gray-200 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" id="kilometraje" required placeholder="Kilometraje" readonly>     
          </div>
          <div class="w-full md:w-1/2 md:ml-2">
            <span class="font-bold text-xl">ID</span><br>
            <input type="text" name="idRuta" id="idRuta" class="bg-gray-200 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold"  readonly="true">
          </div>
        </div>
        <div class="md:flex">
          <div class="w-full md:w-1/3">
            <span class="font-bold text-xl">Vehiculo</span><br>
            <div class='relative'>
            <select name="idVehiculo" id="idVehiculo" required class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold">
            <option></option>
              <?php 
                foreach ($vehi as $v) {
                  $idVehiculo=$v->getIdVehiculo();
                  $marca=$v->getMarca();
                  echo "<option value='$idVehiculo'>$marca</option>";
                }
              ?>
            </select>
            
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
          </div>
          <div class="w-full md:w-1/3 md:ml-2">
            <span class="font-bold text-xl">Motorista</span><br>
            <div class='relative'>
              <select name="idMotorista" required id="idMotorista" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold">
                        <option></option>
                        <?php 
                        foreach ($motor as $m) {

                           echo "<option value=".$m["idMotorista"].">".$m["nombre"]."</option>";
                        }
                         ?>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
          </div>
          <div class="w-full md:w-1/3 md:ml-2">
            <span class="font-bold text-xl">Carga</span><br>
            <div class='relative'>
            <select name="idCarga" id="idCarga" required class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold">
                <option></option>
                        <?php
                            foreach ($carga as $c) { 
                              $idCarga=$c->getIdCarga();
                              $descripcion=$c->getDescripcion();
                              echo "<option value='$idCarga'>$descripcion</option>";
                            }
                        ?>
                
             </select>
             <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
          </div>
          
        </div>
        
        

        <div class="md:flex">
          <div class="col-md-2">
            <!--<input type="button" value="Ver Ruta en el Mapa" id="btnDibujarRuta" disabled="disabled" class="btn btn-info">-->
          </div>
          
          <!--<div class="col-md-2" ></div>-->
          
          
        </div>

        <div class="md:flex">

          <div class="col-md-2">
               <!--<input type="button" value="Ruta" onclick="ruta();" class="btn btn-success">-->
          </div>
          <div class="col-md-2">
              <!--<input type="button" value="obtener kms" class="btn btn-success" onclick="obtenerKmts()">-->
                   
          </div>
          <div class="col-md-2">
          
          </div>
          <div class="col-md-2">
             
             <input type="hidden" id="tiempo">
             <input type="hidden" id="kilometrajeReal" required name="kilometraje">
             
             
          </div>

        </div>


        

        

      
      

       

            <input type="hidden" id="latLng">      
            <input type="hidden" id="oculto">

    
        
            
               
          
            <br>
            <input type="reset"  class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded" value="Nuevo" onclick="$('#g').attr('disabled',false);desactivar()">
            <input type="submit" name="insertar" id="g" value="Guardar" class="bg-blue-400 text-white text-xl mt-2 py-1 px-2 rounded cursor-not-allowed" disabled='true'>
            <input type="submit" name="modificar" value="Modificar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
            <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
        </form>
        </div>
        </div>
        </div>
        <br>
                <table class="table-auto">
                    <thead>
                      <tr>
                        <th class='text-center text-white bg px-4 py-2'>ID</th>
                        <th class='text-center text-white bg px-4 py-2'>Kilometraje</th>
                        <th class='text-center text-white bg px-4 py-2'>LatPuntoA</th>
                        <th class='text-center text-white bg px-4 py-2'>lngPuntoA</th>
                        <th class='text-center text-white bg px-4 py-2'>LatPuntoB</th>
                        <th class='text-center text-white bg px-4 py-2'>lngPuntoB</th>
                        <th class='text-center text-white bg px-4 py-2'>IdMotorista</th>
                        <th class='text-center text-white bg px-4 py-2'>idVehiculo</th>
                        <th class='text-center text-white bg px-4 py-2'>IdCarga</th>
                        <th class='text-center text-white bg px-4 py-2'>Acción</th>
                      </tr>
                    </thead>
                  <tbody>
                    <?php 
                        $count=1;
                        foreach ($datos as $e) {
                            $idRuta=$e->getIdRuta();
                            $kilometraje=$e->getKilometraje();
                            $latPuntoA=$e->getLatPuntoA();
                            $lngPuntoA=$e->getLngPuntoA();
                            $latPuntoB=$e->getLatPuntoB();
                            $lngPuntoB=$e->getLngPuntoB();
                            $idMotorista=$e->getIdMotorista();
                            $idVehiculo=$e->getIdVehiculo();
                            $idCarga=$e->getIdCarga();
                            $count=$count+1;
                            

                            echo "<tr>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center font-bold px-4 py-2'>$idRuta</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$kilometraje</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$latPuntoA</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$lngPuntoA</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$latPuntoB</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$lngPuntoB</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$idMotorista</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$idVehiculo</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$idCarga</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>
                                      <button class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded' id='b3".$count."' onclick=$('#idRuta').val('$idRuta');$('#kilometraje').val('$kilometraje');$('#my_lat').val('$latPuntoA');$('#my_lng').val('$lngPuntoA');$('#your_lat').val('$latPuntoB');$('#your_lng').val('$lngPuntoB');$('#idMotorista').val('$idMotorista');$('#idVehiculo').val('$idVehiculo');$('#idCarga').val('$idCarga');ruta();>Editar</button>
                                    </td>
                                  </tr>";
                            //juarezgaaaaaaaaaaaaaaaaaaaaaaa

                           

                        }
                    ?>
                  </tbody>
                 </table>
        
    </section>
</center>
<br>
    <footer>
    
    </footer>
    <script type="text/javascript" src="dependencias/googleMaps.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBp4XzNgVeOPr0_Jn516wdmLZhblYjyJ0&callback=initMap"
    async defer></script>
    <script>
            function desactivar(){
                var btn = document.getElementById('g');
                btn.classList.remove('cursor-not-allowed','bg-blue-400');
                btn.classList.add('bg-blue-700','hover:bg-red-800');


            }

            // Menu
            document.getElementById('userName').innerHTML=sessionStorage.getItem("user");
            var isOpen=false;
            var opciones = document.getElementById('opciones');
            function menu(){
                if(!isOpen){
                    document.getElementById('cerrar').style='display:block;';
                    document.getElementById('abrir').style='display:none;';
                    opciones.classList.remove('hidden');
                    isOpen=true;
                }
                else{
                    document.getElementById('abrir').style='display:block;';
                    document.getElementById('cerrar').style='display:none;';
                    opciones.classList.add('hidden');
                    isOpen=false;
                }
            }
            
            
        </script>
</body>
</html>