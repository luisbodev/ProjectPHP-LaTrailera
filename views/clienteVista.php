<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Cliente Administrador - La Trailera</title>
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
    <!--Validaciones-->
    <script src="validaciones/validacionCliente.js"></script>
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

       
        function contra() {
        var x = document.getElementById("passwordCli");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }

    </script>
</head>
<body>
    <?php
        $currentPage='Cliente';
        require 'menu/menuAdmin.php';
    ?>
    <header class="text-center">
        <span class="font-bold text-4xl">Gestión Cliente</span>
    </header>
    <section>
    
       <center> 
        <div class="container">               
            
                <form action="#" method="POST" id="f" class="px-16 py-4 border-4 border-gray-600 rounded-lg" onsubmit="return validar(this);">
                <div id="d1"></div>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                            <span class="font-bold text-xl">ID Cliente</span>
                            <input type="text" name="idCliente" id="idCliente" class="bg-gray-400 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true">
                        </div>
                        <div class="w-full md:w-1/2 md:ml-2">
                            <span class="font-bold text-xl">ID Usuario</span>
                            <input type="text" name="idUsuarioCli" id="idUsuarioCli" class="bg-gray-400 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true">
                        </div>
                    </div>
                    <br>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                            <span class="font-bold text-xl">Nombre</span>
                            <input type="text" name="nombre" id="nombre" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                        </div>   
                        <div class="w-full md:w-1/2 md:ml-2">
                            <label for="direccion" class="font-bold text-xl">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                        </div>
                        
                    </div>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                                <label for="nit" class="font-bold text-xl">NIT</label>
                                <input type="text" name="nit" id="nit" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required placeholder="0000-000000-000-0" >
                        </div>
                        <div class="w-full md:w-1/2 md:ml-2">
                            <label for="numContacto" class="font-bold text-xl">Numero de Contacto</label>
                            <input type="text" name="numContacto" id="numContacto" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                        </div>
                    </div>
                    <div class='md:flex'>
                        <div class="w-full md:w-1/2">
                            <label for="correo" class="font-bold text-xl">Correo</label>
                            <input type="text" name="correo" id="correo" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required placeholder="@dominio.com" >
                        </div>
                        <div class="w-full md:w-1/2 md:ml-2">
                            <label for="direccion" class="font-bold text-xl">Dirección</label>
                            <input type="text" name="direccion" id="direccion" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                        </div>
                    </div>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                            <label for="usuarioCli" class="font-bold text-xl">Usuario</label>
                            <input type="text" name="usuarioCli" id="usuarioCli" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                        </div>
                        <div class="w-full md:w-1/2 md:ml-2">
                            <label for="passwordCli" class="font-bold text-xl">Contraseña</label>
                            <input type="password" name="passwordCli" id="passwordCli" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                            <input type="checkbox" onclick="contra()"> Mostrar Contraseña
                            <input type='hidden' name='hiddenPass' id="hiddenPass">
                        </div>
                    </div>
                    <!---->
                     <br>   

                     <input type="reset"  class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded" value="Nuevo" onclick="$('#g').attr('disabled',false);desactivar()">
                    <input type="submit" name="guardar" id="g" value="Guardar" class="bg-blue-400 text-white text-xl mt-2 py-1 px-2 rounded cursor-not-allowed" disabled='true'>
                    <input type="submit" name="modificar" value="Modificar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
                    <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
        </form>
        </div>
               
           
        <br>
            <table class="table-auto">
                    <thead>
                            <th class='text-center text-white bg px-4 py-2'>ID</th>
                            <th class='text-center text-white bg px-4 py-2'>Nombre</th>
                            <th class='text-center text-white bg px-4 py-2'>Apellido</th>
                            <th class='text-center text-white bg px-4 py-2'>Direccion</th>
                            <th class='text-center text-white bg px-4 py-2'>NIT</th>
                            <th class='text-center text-white bg px-4 py-2'>Numero de Contacto</th>
                            <th class='text-center text-white bg px-4 py-2'>Correo</th>
                            <th class='text-center text-white bg px-4 py-2'>Usuario</th>
                            <th class='text-center text-white bg px-4 py-2'>Acción</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($datos as $e) {
                                $idUsuarioCli=$e->getIdUsuarioCli();
                                $usuarioCli=$e->getUsuarioCli();
                                $passwordCli=$e->getPasswordCli();
                                $idCliente=$e->getIdCliente();
                                $nombre=str_replace(" ","&nbsp;",$e->getNombre());
                                $apellido=str_replace(" ","&nbsp;",$e->getApellido());
                                $direccion=str_replace(" ","&nbsp;",$e->getDireccion());
                                $nit=$e->getNit();
                                $numContacto=$e->getNumContacto();
                                $correo=$e->getCorreo();
                                
                                echo "
                                    <tr>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$idCliente</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$nombre</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$apellido</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$direccion</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$nit</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$numContacto</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$correo</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$usuarioCli</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>
                                            <button onclick=$('#idCliente').val('$idCliente');$('#nombre').val('$nombre');$('#apellido').val('$apellido');$('#direccion').val('$direccion');$('#nit').val('$nit');$('#numContacto').val('$numContacto');$('#correo').val('$correo');$('#idUsuarioCli').val('$idUsuarioCli');$('#usuarioCli').val('$usuarioCli');$('#passwordCli').val('$passwordCli');$('#hiddenPass').val('$passwordCli') class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded'>Editar</button>
                                        </td>
                                    </tr>";
                            }
                        ?>
                    </tbody>
                </table> 
            </div>
        </div>

        <br>
        </center>
    </section>
    <footer></footer>
    <script>
            function desactivar(){
                var btn = document.getElementById('g');
                btn.classList.remove('cursor-not-allowed','bg-blue-400');
                btn.classList.add('bg-blue-700','hover:bg-red-800');


            }
        </script>
</body>
</html>