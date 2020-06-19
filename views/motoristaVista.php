<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Motorista Administrador - La Trailera</title>
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
    <script src="validaciones/validarMo.js"></script>
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
        $currentPage='Motorista';
        require 'menu/menuAdmin.php';
    ?>
    <div class="text-center">
        <span class="font-bold text-4xl">Gestión Motorista</span>
    </div>
<center>
    <section>
        <div class="container">
                <form action="#" id="f"  class="px-16 py-4 border-4 border-gray-600 rounded-lg" onsubmit="return validar();">
                <div id="d1"></div>
                <center>
                    <div class='w-full md:w-1/2'>
                        <span class="font-bold text-xl">ID</span>
                        <input type="text" name="idMotorista" id="idMotorista" class="bg-gray-400 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true" required="true"><br>
                    </div>
                </center>    
                <div class="md:flex">
                    <div class='w-full md:w-1/2'>
                        <span class="font-bold text-xl">Nombre</span>
                        <input type="text" name="nombre" id="nombre" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                        <span class="font-bold text-xl">Apellido</span>
                        <input type="text" name="apellido" id="apellido" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                        <span class="font-bold text-xl">Direccion</span>
                        <input type="text" name="direccion" id="direccion" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                    </div>
                    <div class='w-full md:w-1/2 md:ml-2'>
                        <span class="font-bold text-xl">DUI</span>
                        <input type="text" name="dui" id="dui" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true" placeholder="00000000-0"><br>
                        <span class="font-bold text-xl">NIT</span>
                        <input type="text" name="nit" id="nit" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true" placeholder="0000-000000-000-0"><br>
                        <span class="font-bold text-xl">Numero de Licencia</span>
                        <input type="text" name="numLicencia" id="numLicencia" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true" placeholder="0000-000000-000-0"><br>
                    </div>
                </div>
                <input type="reset"  class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded" value="Nuevo" onclick="$('#g').attr('disabled',false);desactivar()">
                <input type="submit" name="guardar" id="g" value="Guardar" class="bg-blue-400 text-white text-xl mt-2 py-1 px-2 rounded cursor-not-allowed" disabled='true'>
                <input type="submit" name="modificar" value="Modificar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
                <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
                </form>
                 <br>

                <div class='container'>
                    <table class="table-auto">
                            <thead>
                                    <th class='text-center text-white bg px-4 py-2'>ID</th>
                                    <th class='text-center text-white bg px-4 py-2'>Nombre</th>
                                    <th class='text-center text-white bg px-4 py-2'>Apellido</th>
                                    <th class='text-center text-white bg px-4 py-2'>Direccion</th>
                                    <th class='text-center text-white bg px-4 py-2'>Dui</th>
                                    <th class='text-center text-white bg px-4 py-2'>Nit</th>
                                    <th class='text-center text-white bg px-4 py-2'>NumLicencia</th>
                                    <th class='text-center text-white bg px-4 py-2'>Acción</th>
                            </thead>
                            <tbody>
                                <?php  
                                foreach ($datos as $e) {
                                    $idMotorista=$e->getIdMotorista();
                                    $nombre=str_replace(" ","&nbsp;",$e->getNombre());
                                    $apellido=str_replace(" ","&nbsp;",$e->getApellido());
                                    $direccion=str_replace(" ","&nbsp;",$e->getDireccion());
                                    $dui=$e->getDui();
                                    $nit=$e->getNit();
                                    $numLicencia=$e->getNumLicencia();

                                    echo "<tr>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2 font-bold'>$idMotorista</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$nombre</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$apellido</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$direccion</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$dui</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$nit</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$numLicencia</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>
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