<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Carga</title>
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
</head>
<body>
    <header class='text-center'>
        <span class="font-bold text-4xl">Gestión de Carga</span>
    </header>

<center>
    <section>
        <div class="container">
            <div class="column col-md-5">
                <form action="#" id="f" method="POST" class="px-16 py-4 border-4 border-gray-600 rounded-lg"><div id="d1"></div>
                    ID Carga<input type="text" name="idCarga" id="idCarga" class="form-control" readonly="true"><br>
                    Descripción<input type="text" name="descripcion" id="descripcion" class="form-control"><br>
                    Peso Total<input type="text" name="peso" id="peso" class="form-control"><br>
                    
                    <input type="reset"  class="btn btn-primary" value="Nuevo" onclick="$('#g').attr('disabled',false)">
                    <input type="submit" name="insertar" id="g" value="Guardar" class="btn btn-primary" disabled='true'>
                    <input type="submit" name="modificar" value="Modificar" class="btn btn-primary">
                    <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="btn btn-primary">
                </form>
                 <br>
                 <div class="table-responsive">
                     <table class="table table-striped">
                         <thead class='thead-dark'>
                             <th scope="col">ID Carga</th>
                             <th scope="col">Descripción</th>
                             <th scope="col">Peso</th>
                             <th scope="col">Acción</th>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($datos as $e) {
                                $idCarga=$e->getIdCarga();
                                $descripcion=str_replace(" ","&nbsp;", $e->getDescripcion());
                                $peso=str_replace(" ","&nbsp;",$e->getPeso()); 
                                echo "<tr>
                                    <td scope='row'>$idCarga</td>
                                    <td>$descripcion</td>
                                    <td>$peso</td><td>
                                    <button class='bg-blue-700 hover:bg-red-800 text-white py-1 px-2 rounded' onclick=$('#idCarga').val('$idCarga');$('#descripcion').val('$descripcion');$('#peso').val('$peso')>Editar</button></td>
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
</center>
</body>
</html>