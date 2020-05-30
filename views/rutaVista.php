<!DOCTYPE html>
<html lang="es">
<head>
    <title>Vista Ruta</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dependencias/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="dependencias/jquery.js"></script>
    <script type="text/javascript" src="dependencias/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="dependencias/sweetalert2.all.min.js"></script>
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
<body><center>
    <h2>CRUD Ruta</h2>
    <section>
        <div class="container">
            <div class="column col-md-5">
                <form action="#" id="f" ><div id="d1"></div>
                    ID<input type="text" name="idRuta" id="idRuta" class="form-control" readonly="true"><br>
                    Kilometraje<input type="text" name="kilometraje" id="kilometraje" class="form-control"><br>
                    Punto Partida<input type="text" name="puntoPartida" id="puntoPartida" class="form-control"><br>
                    Punto Llegada<input type="text" name="puntoLlegada" id="puntoLlegada" class="form-control"><br>
                    IdMotorista<select name="idMotorista" id="idMotorista" class="form-control">
                        <option></option>
                        <?php 
                        foreach ($motor as $m) {

                           echo "<option value=".$m["idMotorista"].">".$m["nombre"]."</option>";
                        }
                         ?>
                    </select><br>

                    <input type="reset"  class="btn btn-primary" value="Nuevo" onclick="$('#g').attr('disabled',false)">
                    <input type="submit" name="insertar" id="g" value="Guardar" class="btn btn-primary">
                    <input type="submit" name="modificar" value="Modificar" class="btn btn-primary">
                    <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="btn btn-primary">
                </form>
                 <br>
                 <table class="table">
                     <tr><th>ID</th><th>Kilometraje</th><th>Punto Partida</th><th>Punto Llegada</th><th>IdMotorista</th><th>Acción</th></tr>
                    <?php  
                        foreach ($datos as $e) {
                            $idRuta=$e->getIdRuta();
                            $kilometraje=$e->getKilometraje();
                            $puntoPartida=$e->getPuntoPartida();
                            $puntoLlegada=$e->getPuntoLlegada();
                            $idMotorista=$e->getIdMotorista();
                            

                            echo "<tr><td>$idRuta</td><td>$kilometraje</td><td>$puntoPartida</td><td>$puntoLlegada</td><td>$idMotorista</td><td>
                            <button class='btn btn-warning' onclick=$('#idRuta').val('$idRuta');$('#kilometraje').val('$kilometraje');$('#puntoPartida').val('$puntoPartida');$('#puntoLlegada').val('$puntoLlegada');$('#idMotorista').val('$idMotorista')>Editar</button></td></tr>";
                            //juarezgaaaaaaaaaaaaaaaaaaaaaaa

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