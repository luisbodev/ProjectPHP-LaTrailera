<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas Empleado - La Trailera</title>
    <!--Dependencias-->
    <!-- <link rel="stylesheet" type="text/css" href="dependencias/bootstrap/css/bootstrap.css"> -->
    <script type="text/javascript" src="dependencias/jquery.js"></script>
    <!-- <script type="text/javascript" src="dependencias/bootstrap/js/bootstrap.js"></script> -->
    <script type="text/javascript" src="dependencias/sweetalert2.all.min.js"></script>
    <!-- Tailwind -->
    <link rel="stylesheet" href="dependencias/tailwind.css">
    <!--Validaciones-->
    <script src="validaciones/validacionRuta.js"></script>
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
    <?php
        $currentPage='Ruta';
        require 'menu/menuEmpleado.php';
    ?>
    <div class="text-center">
        <span class="font-bold text-4xl">Rutas</span>
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
    <form action="#" id="f" method="POST" onsubmit="return validar(this);">
    <div id="d1"></div>
     <br>
        <div class='w-full md:w-1/2'>
          <input type="button" value="Agregar Ruta" id="btnMark" onclick="initMap(); $('#my_lat').val(' ');$('#my_lng').val('');$('#your_lat').val('');$('#your_lng').val('');" class="bg-green-500 hover:bg-red-700 text-white text-xl mt-2 py-1 px-2 rounded">
        </div>
        <div class="hidden">
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
            <span class="font-bold text-xl">ID</span><br>
            <input type="text" name="idRuta" id="idRuta" class="bg-gray-200 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold"  readonly="true">
          </div>
          <div class="w-full md:w-1/2 md:ml-2">
              <!--<input type="button" value="obtener kms" class="btn btn-success" onclick="obtenerKmts()">-->
              <span class="font-bold text-xl">Kilometraje</span><br>
              <input type="text" class="bg-gray-200 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" id="kilometraje" required placeholder="Kilometraje" readonly>     
          </div>
          
        </div>

        <div class='md:flex'>
          <div class="w-full md:w-1/2">
            <span class="font-bold text-xl">Descripción</span><br>
            <input type="text" name="descripcion" id="descripcion" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
          </div>

          <div class="w-full md:w-1/2 md:ml-2">
            <span class="font-bold text-xl">Carga</span><br>
            <input type="text" name="carga" id="carga" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold">
        </div>

        </div>

        <div class="md:flex">
          <div class="w-full md:w-1/2">
            <span class="font-bold text-xl">Vehiculo</span><br>
            <div class='relative'>
            <select name="idVehiculo" id="idVehiculo" required class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold">
            <option></option>
              <?php 
                foreach ($vehi as $v) {
                  $idVehiculo=$v->getIdVehiculo();
                  $marca=$v->getMarca();
                  $placa=$v->getPlaca();
                  echo "<option value='$idVehiculo'>".$marca." ".$placa."</option>";
                }
              ?>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
          </div>

          <div class="w-full md:w-1/2 md:ml-2">
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

          
        
             
        

             <input type="hidden" id="tiempo">
             <input type="hidden" id="kilometrajeReal" required name="kilometraje">
             

        </div>
       
            <input type="hidden" id="latLng">      
            <input type="hidden" id="oculto">


            <br>
            <div class="w-full">
                    <input type="submit" name="guardar" id="g" value="Guardar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
                </div>
        </form>
        </div>
        </div>
        </div>
        <br>
                <table class="table-auto">
                    <thead>
                      <tr>
                        <th class='text-center text-white bg px-4 py-2'>ID</th>
                        <th class='text-center text-white bg px-4 py-2'>  Descripción  </th>
                        <th class='text-center text-white bg px-4 py-2'>Carga</th>
                        <th class='text-center text-white bg px-4 py-2'>Kilometraje</th>
                        <th class='text-center text-white bg px-4 py-2'>ID Vehiculo</th>
                        <th class='text-center text-white bg px-4 py-2'>ID Motorista</th>
                        <!-- <th class='text-center text-white bg px-4 py-2'>Acción</th> -->
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
                            $carga=str_replace(" ","&nbsp;",$e->getCarga());
                            $descripcion=str_replace(" ","&nbsp;",$e->getDescripcion());
                            $count=$count+1;
                            

                            echo "<tr>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center font-bold px-4 py-2'>$idRuta</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$descripcion</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$carga</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$kilometraje</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$idVehiculo</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$idMotorista</td>
                                    
                                  </tr>";

                           

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
        </script>
</body>
</html>