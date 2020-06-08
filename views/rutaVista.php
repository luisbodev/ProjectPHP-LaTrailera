<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Ruta - La Trailera</title>
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
     <style>
      /* Tamaño del div del mapa. */
      #map {
        height: 100%;
        margin-top: 2%;
      }
      
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #contenedor{
        height: 50%;
        margin: 0;
        padding: 0;
      }
      #btnDibujarRuta{
        margin-top: 3px;
      }

    </style>
</head>
<body>
    <header class="text-center">
        <span class="font-bold text-4xl">Gestión Ruta</span>
    </header>
      <div class="container">
        <div class="row">
          
        </div>
      </div>
      <center>
      <div class="col-md-4">
            <input type="button" value="Obtener mi hubicación" onclick="get_my_location();" class="btn btn-success">
          </div>
      </center>
      <center id='contenedor'>
          <div id="output" class='w-11/12 md:w-1/2'></div>
          <div id="map" class='w-11/12 md:w-1/2'></div>
      </center>
      <br>
  <section>
  <div class="container">
    <form action="#" id="f" method="POST" class="px-16 py-4 border-4 border-gray-600 rounded-lg">
    <div id="d1"></div>
     <br>
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-2">Punto de Partida</div>
          
          <div class="col-md-2">Punto de Llegada</div>
          <div class="col-md-2">Vehiculo</div>
        </div>

        
        <div class="row">

          <div class="col-md-2">
             <input type="button" value="Agregar Ruta" id="btnMark" onclick="initMap(); $('#my_lat').val(' ');$('#my_lng').val('');$('#your_lat').val('');$('#your_lng').val('');" class="btn btn-success">
          </div>

          <div class="col-md-2">
            <input type="text" required placeholder="Latitud" name="my_lat"  id="my_lat" class="form-control" readonly="true">
          </div>


          <div class="col-md-2">
            <input type="text" required  class="form-control" name="your_lat" id="your_lat" placeholder="Latitud"readonly>
          </div>

          <div class="col-md-2">
            <select name="idVehiculo" id="idVehiculo" required class="form-control">
            <option></option>
              <?php 
                foreach ($vehi as $v) {
                  $idVehiculo=$v->getIdVehiculo();
                  $marca=$v->getMarca();
                  echo "<option value='$idVehiculo'>$marca</option>";
                }
              ?>
            </select>
          </div>

        </div>

        <div class="row">
          <div class="col-md-2">
            <!--<input type="button" value="Ver Ruta en el Mapa" id="btnDibujarRuta" disabled="disabled" class="btn btn-info">-->
          </div>
          <div class="col-md-2">
            <input type="text" required placeholder="Longitud" name="my_lng" id="my_lng" class="form-control" readonly>
          </div>
          <!--<div class="col-md-2" ></div>-->
          <div class="col-md-2">
            <input type="text"  class="form-control" name="your_lng" id="your_lng" placeholder="Longitud" required readonly>
          </div>
          <div  class="col-md-2">
          Motorista<select name="idMotorista" required id="idMotorista" class="form-control">
                        <option></option>
                        <?php 
                        foreach ($motor as $m) {

                           echo "<option value=".$m["idMotorista"].">".$m["nombre"]."</option>";
                        }
                         ?>
                    </select>
          </div>
        </div>

        <div class="row">

          <div class="col-md-2">
               <!--<input type="button" value="Ruta" onclick="ruta();" class="btn btn-success">-->
          </div>
          <div class="col-md-2">
              <!--<input type="button" value="obtener kms" class="btn btn-success" onclick="obtenerKmts()">-->
              Kilometraje
              <input type="text" class="form-control" id="kilometraje" required placeholder="Kilometraje" readonly>     
          </div>
          <div class="col-md-2">
          ID<input type="text" name="idRuta" id="idRuta" class="form-control"  readonly="true">
          </div>
          <div class="col-md-2">
             Carga
             <select name="idCarga" id="idCarga" required class="form-control">
                <option></option>
                        <?php
                            foreach ($carga as $c) { 
                              $idCarga=$c->getIdCarga();
                              $descripcion=$c->getDescripcion();
                              echo "<option value='$idCarga'>$descripcion</option>";
                            }
                        ?>
                
             </select>
             <input type="hidden" id="tiempo">
             <input type="hidden" id="kilometrajeReal" required name="kilometraje">
             
             
          </div>

        </div>


        </div>

        

      
      

       

            <input type="hidden" id="latLng">      
            <input type="hidden" id="oculto">

    
        
            
               
          
            <br>
            <input type="reset"  class="btn btn-primary" value="Nuevo" onclick="$('#g').attr('disabled',false)">
            <input type="submit" name="insertar" id="g" value="Guardar" class="btn btn-primary">
            <input type="submit" name="modificar" value="Modificar" class="btn btn-primary">
            <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="btn btn-primary">
        </form>
        </div>
        <br>
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                      <tr>
                        <th>ID</th>
                        <th>Kilometraje</th>
                        <th>LatPuntoA</th>
                        <th>lngPuntoA</th>
                        <th>LatPuntoB</th>
                        <th>lngPuntoB</th>
                        <th>IdMotorista</th>
                        <th>idVehiculo</th>
                        <th>IdCarga</th>
                        <th>Acción</th>
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
                                    <td>$idRuta</td>
                                    <td>$kilometraje</td>
                                    <td>$latPuntoA</td>
                                    <td>$lngPuntoA</td>
                                    <td>$latPuntoB</td>
                                    <td>$lngPuntoB</td>
                                    <td>$idMotorista</td>
                                    <td>$idVehiculo</td>
                                    <td>$idCarga</td>
                                    <td>
                                      <button class='btn btn-warning' id='b3".$count."' onclick=$('#idRuta').val('$idRuta');$('#kilometraje').val('$kilometraje');$('#my_lat').val('$latPuntoA');$('#my_lng').val('$lngPuntoA');$('#your_lat').val('$latPuntoB');$('#your_lng').val('$lngPuntoB');$('#idMotorista').val('$idMotorista');$('#idVehiculo').val('$idVehiculo');$('#idCarga').val('$idCarga');ruta();>Editar</button>
                                    </td>
                                  </tr>";
                            //juarezgaaaaaaaaaaaaaaaaaaaaaaa

                           

                        }
                    ?>
                  </tbody>
                 </table>

            </div>
        </div>
    </section>
    <footer>
    
    </footer>
    <script type="text/javascript" src="dependencias/googleMaps.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBp4XzNgVeOPr0_Jn516wdmLZhblYjyJ0&callback=initMap"
    async defer></script>

</body>
</html>