<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Motorista - La Trailera</title>
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
<body>
    <header class="text-center">
        <span class="font-bold text-4xl">Gestión Motorista</span>
    </header>
    <section>
        <div class="container">
                <form action="#" id="f" onsubmit="return validar(this);" class="px-16 py-4 border-4 border-gray-600 rounded-lg">
                <center>
                    <div class='col-sm-12 col-md-6 text-left'>
                        ID
                        <input type="text" name="idMotorista" id="idMotorista" class="form-control" readonly="true" required="true"><br>
                    </div>
                </center>    
                <div class="row">
                    <div class='col-sm-12 col-md-6'>
                        Nombre<input type="text" name="nombre" id="nombre" class="form-control" required="true"><br>
                        Apellido<input type="text" name="apellido" id="apellido" class="form-control" required="true"><br>
                        Direccion<input type="text" name="direccion" id="direccion" class="form-control" required="true"><br>
                    </div>
                    <div class='col-sm-12 col-md-6'>
                        DUI<input type="text" name="dui" id="dui" class="form-control" required="true" placeholder="00000000-0"><br>
                        NIT<input type="text" name="nit" id="nit" class="form-control" required="true" placeholder="0000-000000-000-0"><br>
                        Numero de Licencia<input type="text" name="numLicencia" id="numLicencia" class="form-control" required="true" placeholder="0000-000000-000-0"><br>
                    </div>
                </div>
                    <input type="reset"  class="btn btn-primary" value="Nuevo" onclick="$('#g').attr('disabled',false)">
                    <input type="submit" name="insertar" id="g" value="Guardar" class="btn btn-primary" disabled="true">
                    <input type="submit" name="modificar" value="Modificar" class="btn btn-primary">
                    <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="btn btn-primary">
                </form>
                 <br>

                <div class='container'>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class='thead-dark'>
                                    <th scope="col" class="text-center">ID</th>
                                    <th scope="col" class="text-center">Nombre</th>
                                    <th scope="col" class="text-center">Apellido</th>
                                    <th scope="col" class="text-center">Direccion</th>
                                    <th scope="col" class="text-center">Dui</th>
                                    <th scope="col" class="text-center">Nit</th>
                                    <th scope="col" class="text-center">NumLicencia</th>
                                    <th scope="col" class="text-center">Acción</th>
                            </thead>
                            <tbody>
                                <?php  
                                foreach ($datos as $e) {
                                    $idMotorista=$e->getIdMotorista();
                                    $nombre=$e->getNombre();
                                    $apellido=$e->getApellido();
                                    $direccion=$e->getDireccion();
                                    $dui=$e->getDui();
                                    $nit=$e->getNit();
                                    $numLicencia=$e->getNumLicencia();

                                    echo "<tr>
                                            <td>$idMotorista</td>
                                            <td>$nombre</td>
                                            <td>$apellido</td>
                                            <td>$direccion</td>
                                            <td>$dui</td>
                                            <td>$nit</td>
                                            <td>$numLicencia</td>
                                            <td>
                                                <button onclick=$('#idMotorista').val('$idMotorista');$('#nombre').val('$nombre');$('#apellido').val('$apellido');$('#direccion').val('$direccion');$('#dui').val('$dui');$('#nit').val('$nit');$('#numLicencia').val('$numLicencia') class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded'>Editar</button>
                                            </td>
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