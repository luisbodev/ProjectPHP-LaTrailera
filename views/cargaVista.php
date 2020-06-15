<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Carga</title>
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
    <!--Validacion-->
    <script src="validaciones/validacionCarga.js"></script>
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
        $currentPage='Carga';
        require 'menu/menuAdmin.php';
    ?>
    <div class='text-center'>
        <span class="font-bold text-4xl">Gestión de Carga</span>
    </div>

<center>
    <section>
        <div class="container">
            <div class="w-full md:w-1/2">
                <form action="#" id="f" onsubmit="return validar2(this);" method="POST" class="px-16 py-4 border-4 border-gray-600 rounded-lg"><div id="d1" ></div>
                <span class="font-bold text-xl">ID Carga</span>
                    <input type="text" name="idCarga" id="idCarga" class="bg-gray-400 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true"><br>
                    <span class="font-bold text-xl">Descripción</span>
                    <input type="text" name="descripcion" id="descripcion" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold"><br>
                    <span class="font-bold text-xl">Peso Total</span>
                    <input type="text" name="peso" id="peso" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold"><br>
                    
                    <input type="reset"  class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded" value="Nuevo" onclick="$('#g').attr('disabled',false);desactivar()">
                    <input type="submit" name="guardar" id="g" value="Guardar" class="bg-blue-400 text-white text-xl mt-2 py-1 px-2 rounded cursor-not-allowed" disabled='true'>
                    <input type="submit" name="modificar" value="Modificar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
                    <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
                </form>
                 <br>
                     <table class="table-auto">
                         <thead>
                             <th class='text-center text-white bg px-4 py-2'>ID Carga</th>
                             <th class='text-center text-white bg px-4 py-2'>Descripción</th>
                             <th class='text-center text-white bg px-4 py-2'>Peso</th>
                             <th class='text-center text-white bg px-4 py-2'>Acción</th>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($datos as $e) {
                                $idCarga=$e->getIdCarga();
                                $descripcion=str_replace(" ","&nbsp;", $e->getDescripcion());
                                $peso=str_replace(" ","&nbsp;",$e->getPeso()); 
                                echo "<tr>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$idCarga</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$descripcion</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$peso</td>
                                    <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>
                                    <button class='bg-blue-700 hover:bg-red-800 text-white py-1 px-2 rounded' onclick=$('#idCarga').val('$idCarga');$('#descripcion').val('$descripcion');$('#peso').val('$peso')>Editar</button></td>
                                    </tr>";
                            }
                        ?>
                        </tbody>
                     </table>

            </div>
        </div>
    </section>
    <br>
</center>
    <footer>
    
    </footer>
    <script>
            function desactivar(){
                var btn = document.getElementById('g');
                btn.classList.remove('cursor-not-allowed','bg-blue-400');
                btn.classList.add('bg-blue-700','hover:bg-red-800');


            }
        </script>
</body>
</html>