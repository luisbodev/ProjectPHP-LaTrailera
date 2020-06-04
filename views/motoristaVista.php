<!DOCTYPE html>
<html lang="es">
<head>
    <title>Vista Motorista</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dependencias/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="dependencias/jquery.js"></script>
    <script type="text/javascript" src="dependencias/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="dependencias/sweetalert2.all.min.js"></script>
    <script src="validar.js"></script>
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
    <h2>CRUD Motorista</h2>
    <section>
        <div class="container">
            <div class="column col-md-5">
<<<<<<< HEAD
                <form action="#" id="f" onsubmit="return validar(this);"><div id="d1"></div>
                    ID<input type="text" name="idMotorista" id="idMotorista" class="form-control" readonly="true" required="true"><br>
                    Nombre<input type="text" name="nombre" id="nombre" class="form-control" required="true"><br>
                    Apellido<input type="text" name="apellido" id="apellido" class="form-control" required="true"><br>
                    Direccion<input type="text" name="direccion" id="direccion" class="form-control" required="true"><br>
                    DUI<input type="text" name="dui" id="dui" class="form-control" required="true" placeholder="00000000-0"><br>
                    NIT<input type="text" name="nit" id="nit" class="form-control" required="true" placeholder="0000-000000-000-0"><br>
                    Numero de Licencia<input type="text" name="numLicencia" id="numLicencia" class="form-control" required="true" placeholder="0000-000000-000-0"><br>
=======
                <form action="#" id="f" method="POST" ><div id="d1"></div>
                    ID<input type="text" name="idMotorista" id="idMotorista" class="form-control" readonly="true"><br>
                    Nombre<input type="text" name="nombre" id="nombre" class="form-control"><br>
                    Apellido<input type="text" name="apellido" id="apellido" class="form-control"><br>
                    Direccion<input type="text" name="direccion" id="direccion" class="form-control"><br>
                    DUI<input type="text" name="dui" id="dui" class="form-control"><br>
                    NIT<input type="text" name="nit" id="nit" class="form-control"><br>
                    Numero de Licencia<input type="text" name="numLicencia" id="numLicencia" class="form-control"><br>
>>>>>>> 2cc9e179adb5d9665357b30b8cf08fa47bb03f91

                    <input type="reset"  class="btn btn-primary" value="Nuevo" onclick="$('#g').attr('disabled',false)">
                    <input type="submit" name="insertar" id="g" value="Guardar" class="btn btn-primary">
                    <input type="submit" name="modificar" value="Modificar" class="btn btn-primary">
                    <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="btn btn-primary">
                </form>
                 <br>
                 <table class="table">
                     <tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Direccion</th><th>Dui</th><th>Nit</th><th>NumLicencia</th><th>Acción</th></tr>
                    <?php  
                        foreach ($datos as $e) {
                            $idMotorista=$e->getIdMotorista();
                            $nombre=$e->getNombre();
                            $apellido=$e->getApellido();
                            $direccion=$e->getDireccion();
                            $dui=$e->getDui();
                            $nit=$e->getNit();
                            $numLicencia=$e->getNumLicencia();

                            echo "<tr><td>$idMotorista</td><td>$nombre</td><td>$apellido</td><td>$direccion</td><td>$dui</td><td>$nit</td><td>$numLicencia</td><td><button class='btn btn-warning' onclick=$('#idMotorista').val('$idMotorista');$('#nombre').val('$nombre');$('#apellido').val('$apellido');$('#direccion').val('$direccion');$('#dui').val('$dui');$('#nit').val('$nit');$('#numLicencia').val('$numLicencia')>Editar</button></td></tr>";
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