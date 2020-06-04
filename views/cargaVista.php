<!DOCTYPE html>
<html lang="es">
<head>
    <title>Vista Carga</title>
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
    <h2>CRUD CARGA</h2>
    <section>
        <div class="container">
            <div class="column col-md-5">
                <form action="#" id="f" method="POST" ><div id="d1"></div>
                    ID Carga<input type="text" name="idCarga" id="idCarga" class="form-control" readonly="true"><br>
                    Descripción<input type="text" name="descripcion" id="descripcion" class="form-control"><br>
                    Peso Total<input type="text" name="peso" id="peso" class="form-control"><br>
                    
                    <input type="reset"  class="btn btn-primary" value="Nuevo" onclick="$('#g').attr('disabled',false)">
                    <input type="submit" name="insertar" id="g" value="Guardar" class="btn btn-primary">
                    <input type="submit" name="modificar" value="Modificar" class="btn btn-primary">
                    <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="btn btn-primary">
                </form>
                 <br>
                 <table class="table">
                     <tr><th>ID Carga</th><th>Descripción</th><th>Peso</th><th>Acción</th></tr>
                    <?php 
                        foreach ($datos as $e) {
                            $idCarga=$e->getIdCarga();
                            $descripcion=str_replace(" ","&nbsp;", $e->getDescripcion());
                            $peso=str_replace(" ","&nbsp;",$e->getPeso()); 

                            echo "<tr><td>$idCarga</td><td>$descripcion</td><td>$peso</td><td><button onclick=$('#idCarga').val('$idCarga');$('#descripcion').val('$descripcion');$('#peso').val('$peso')>Editar</button></td></tr>";
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