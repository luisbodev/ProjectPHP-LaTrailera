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
    <center>
    <section>
        <div class="container">
            <div class="column col-md-5">
                <form action="#" id="f"  method="POST" ><div id="d1"></div>
                    <div id="d1"></div>
                    ID<input type="text" name="idVehiculo" id="idVehiculo" class="form-control" readonly="true"><br>
                    Marca<input type="text" name="marca" id="marca" class="form-control"><br>
                    Placa<input type="text" name="placa" id="placa" class="form-control"><br>
                    Modelo<input type="text" name="modelo" id="modelo" class="form-control"><br>
                    Taza de Combustible<input type="text" name="tazaCombustible" id="tazaCombustible" class="form-control"><br>
                    Capacidad<input type="text" name="capacidadCombustible" id="capacidadCombustible" class="form-control"><br>
                    Kilometros Recorridos<input type="text" name="kmRecorridos" id="kmRecorridos" class="form-control"><br>
                    <input type="reset"  class="btn btn-primary" value="Nuevo" onclick="$('#g').attr('disabled',false)">

                    <input type="submit" name="insertar" id="g" value="Guardar" class="btn btn-primary">
                    <input type="submit" name="modifi" id="modifi" value="Modificar" class="btn btn-primary">
                    <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="btn btn-primary">
                </form>
                 <br>
                 <table class="table">
                     <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Placa</th>
                        <th>Modelo</th>
                        <th>Taza de Combustible</th>
                        <th>Capacidad</th>
                        <th>KM</th>
                        <th>Acción</th>
                    </tr>
                    <?php  
                        foreach ($datos as $e) {
                            $idVehiculo=$e->getIdVehiculo();
                            $marca=$e->getMarca();
                            $placa=$e->getPlaca();
                            $modelo=$e->getModelo();
                            $tazaCombustible=$e->getTazaCombustible();
                            $capacidadCombustible=$e->getCapacidadCombustible();
                            $kmRecorridos=$e->getKmRecorridos();

                            echo "<tr><td>$idVehiculo</td><td>$marca</td><td>$placa</td><td>$modelo</td><td>$tazaCombustible</td><td>$capacidadCombustible</td><td>$kmRecorridos</td><td><button class='btn btn-warning' onclick=$('#idVehiculo').val('$idVehiculo');$('#marca').val('$marca');$('#placa').val('$placa');$('#modelo').val('$modelo');$('#tazaCombustible').val('$tazaCombustible');$('#capacidadCombustible').val('$capacidadCombustible');$('#kmRecorridos').val('$kmRecorridos')>Editar</button></td></tr>";
                        }
                    ?>
                 </table>

            </div>
        </div>
    </section>
    <footer>
    
    </footer>
</center>
</body>
</html>