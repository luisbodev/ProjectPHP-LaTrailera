<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Envio Empleado - La Trailera</title>
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
<body>
        
    <?php
        $currentPage='Envios';
        require 'menu/menuEmpleado.php';
    ?>

    
    <div class="text-center">
        <span class="font-bold text-4xl">Gestión Detalle Envio Seleccionado</span>
    </div>
     
<center>
<br>

    <section>    
                    
        <div class="container">   
            
                <form action="#" method="POST" id="f" class="px-2 md:px-16 py-4 border-4 border-gray-600 rounded-lg">
                <div id="d1"></div>
                
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                            <span class="font-bold text-xl">ID Detalle Envio</span>
                            <input type="text" name="idEnvioDetalle" id="idEnvioDetalle" class="bg-gray-400 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true">
                        </div>
                        <div class="w-full md:w-1/2 md:ml-2">
                            <span class="font-bold text-xl">ID Envio</span>
                            <input type="text" name="idEnvio" id="idEnvio" class="bg-gray-400 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true" value="<?php echo $e ?>" required>
                        </div>
                    </div>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                        <span class="font-bold text-xl">Descripción Ruta Seleccionada</span>
                            <div class='relative'>
                                <select name="ruta" id="ruta" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                                        <option value=""></option>
                                        <?php
                                            foreach ($datosRuta as $r) {
                                                echo "<option value=".$r['idRuta'].">".$r['descripcion']."</option>";
                                            }
                                        ?>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
    <br>
    <center id='contenedor' class='hidden'>
          <div id="output" class='w-full md:w-1/2'></div>
          <div id="map" class='w-full md:w-1/2'></div>
      </center>
                    
            <div class='hidden'>
                <input type="text" id="my_lat" name="my_lat">
                <input type="text" id="my_lng" name="my_lng"><!-- Se imprimen las lat y lng-->
                <input type="text" id="your_lat" name="your_lat">
                <input type="text" id="your_lng" name="your_lng">
            </div>
                    <!---->
                     <br>   
            <div class="w-full">
                <input type="submit" name="guardar" id="g" value="Guardar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
            </div>
            
            
        </form>
        </div>
        <div class='m-4'>
            <a href="controlEnvioEmpleado.php" class='text-xl font-bold text-blue-700 hover:text-red-800 hover:underline'>← Regresar</a>
        </div>
            <table class="table-auto">
                    <thead>
                        <tr>
                            <th class='text-center text-white bg px-4 py-2'>ID Detalle</th>
                            <th class='text-center text-white bg px-4 py-2'>ID Ruta</th>
                            <th class='text-center text-white bg px-4 py-2'>Carga</th>
                            <th class='text-center text-white bg px-4 py-2'>ID Envio</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($datos1 as $e) {
                                $idDetalleEnvio=$e->getIdDetalleEnvio();
                                $idRuta=$e->getIdRuta();
                                $idEnvio=$e->getIdEnvio();
                                $latPuntoA=$e->getLatPuntoA();
                                $lngPuntoA=$e->getLngPuntoA();
                                $latPuntoB=$e->getLatPuntoB();
                                $lngPuntoB=$e->getLngPuntoB();
                                $carga=$e->getCarga();          
                                echo "<tr>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center font-bold px-4 py-2'>$idDetalleEnvio</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$idRuta</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$carga</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$idEnvio</td>
                                        </tr>";
                             } 
                        ?>
                    </tbody>
                </table> 
            </div>
        </div>
        
    </section>
</center>
    <br>
    <footer></footer>
    <script>

           

            /*var xhr = new XMLHttpRequest();
            xhr.open('GET','../controllers/controlDetalleEnvio.php');
            xhr.onload = function(){
                if(xhr.status === 200){
                    var json = xhr.responseText;
                    console.log(xhr.responseText);
                } else {
                    console.log("existe un error de tipo: "+xhr.status);
                }
            }
            xhr.send();*/
            
            
        </script>
        <script type="text/javascript" src="dependencias/googleMaps.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBp4XzNgVeOPr0_Jn516wdmLZhblYjyJ0&callback=initMap"
        async defer></script>
</body>
</html>