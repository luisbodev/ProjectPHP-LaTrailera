<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Empleado - La Trailera</title>
    <!--Dependencias-->
    <!-- <link rel="stylesheet" type="text/css" href="dependencias/bootstrap/css/bootstrap.css"> -->
    <script type="text/javascript" src="dependencias/jquery.js"></script>
    <!-- <script type="text/javascript" src="dependencias/bootstrap/js/bootstrap.js"></script> -->
    <script type="text/javascript" src="dependencias/sweetalert2.all.min.js"></script>
    <!-- Validaciones -->
    <script src="validaciones/validarEmp.js"></script>
    <!-- Tailwind -->
    <link rel="stylesheet" href="dependencias/tailwind.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/menu.css">
    <!--Logo-->
    <link rel="icon" type="image/png" href="img/logo/Logo-LaTrailera.png">
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
        var x = document.getElementById("password");
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
        $currentPage='Empleado';
        require 'menu/menuAdmin.php';
    ?>
    <div class="text-center">
        <span class="font-bold text-4xl">Gestión Empleado</span>
    </div>
<center>
    <section>
        <div class="container">               
            
                <form action="#" method="POST" id="f" class="px-16 py-4 border-4 border-gray-600 rounded-lg" onsubmit="return validar();">
                <div id="d1"></div>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                            <span class="font-bold text-xl">ID Empleado</span>
                            <input type="text" name="idEmpleado" id="idEmpleado" class="bg-gray-400 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true">
                        </div>
                        <div class="w-full md:w-1/2 md:ml-2">
                            <span class="font-bold text-xl">ID Usuario</span>
                            <input type="text" name="idUsuarioEmp" id="idUsuarioEmp" class="bg-gray-400 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true">
                        </div>
                    </div>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                            <span class="font-bold text-xl">Nombre</span>
                            <input type="text" name="nombre" id="nombre" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                        </div>
                        <div class="w-full md:w-1/2 md:ml-2">
                            <span class="font-bold text-xl">Apellido</span>
                            <input type="text" name="apellido" id="apellido" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                        </div>   
                    </div>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                            <label for="sexo" class="font-bold text-xl">Sexo</label>
                                <div class='relative'>
                                <select class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" name="sexo" id="sexo" required>
                                    <option value="">Seleccionar</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>	
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                                </div>
                        </div>
                        
                        <div class="w-full md:w-1/2 md:ml-2">
                            <label for="cargo" class="font-bold text-xl">Cargo</label>
                            <div class='relative'>
                            <select class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" name="cargo" id="cargo" required>
                                <option value="">Seleccionar</option>
                                <option value="Empleado">Empleado</option>
                                <option value="Administrador">Administrador</option>	
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class='md:flex'>
                        <div class="w-full md:w-1/2">
                            <label for="direccion" class="font-bold text-xl">Dirección</label>
                            <input type="text" name="direccion" id="direccion" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                        </div>
                    </div>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                                <label for="dui" class="font-bold text-xl">DUI</label>
                                <input type="text" name="dui" id="dui" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" placeholder="00000000-0" required>
                        </div>
                        <div class="w-full md:w-1/2 md:ml-2">
                            <label for="nit" class="font-bold text-xl">NIT</label><input type="text" name="nit" id="nit" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" placeholder="0000-000000-000-0" required>
                        </div>
                    </div>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                            <label for="usuarioEmp" class="font-bold text-xl">Usuario</label><input type="text" name="usuarioEmp" id="usuarioEmp" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" placeholder="empNombreUsuario">
                        </div>
                        <div class="w-full md:w-1/2 md:ml-2">
                            <label for="password" class="font-bold text-xl">Contraseña</label><input type="password" name="password" id="password" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" >
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
                    <thead class="thead-dark">
                        <tr>
                            <th class='text-center text-white bg px-4 py-2'>ID</th>
                            <th class='text-center text-white bg px-4 py-2'>Nombre</th>
                            <th class='text-center text-white bg px-4 py-2'>Apellido</th>
                            <th class='text-center text-white bg px-4 py-2'>Sexo</th>
                            <th class='text-center text-white bg px-4 py-2'>Direccion</th>
                            <th class='text-center text-white bg px-4 py-2'>Cargo</th>
                            <th class='text-center text-white bg px-4 py-2'>DUI</th>
                            <th class='text-center text-white bg px-4 py-2'>NIT</th>
                            <th class='text-center text-white bg px-4 py-2'>Usuario</th>
                            <th class='text-center text-white bg px-4 py-2'>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($datos as $e) {
                                $idUsuarioEmp=$e->getIdUsuarioEmp();
                                $usuarioEmp=$e->getUsuarioEmp();
                                $password=str_replace(" ","&nbsp;",$e->getPassword());
                                // $rol=$e->getRol();
                                $idEmpleado=$e->getIdEmpleado();
                                $nombre=str_replace(" ","&nbsp;",$e->getNombre());
                                $apellido=str_replace(" ","&nbsp;",$e->getApellido());
                                $sexo=$e->getSexo();
                                $direccion=str_replace(" ","&nbsp;",$e->getDireccion());
                                $cargo=$e->getCargo();
                                $dui=$e->getDui();
                                $nit=$e->getNit();
                                
                                echo "
                                    <tr>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center font-bold px-4 py-2'>$idEmpleado</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$nombre</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$apellido</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$sexo</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$direccion</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$cargo</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$dui</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$nit</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$usuarioEmp</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>
                                            <button onclick=$('#idEmpleado').val('$idEmpleado');$('#nombre').val('$nombre');$('#apellido').val('$apellido');$('#sexo').val('$sexo');$('#direccion').val('$direccion');$('#cargo').val('$cargo');$('#dui').val('$dui');$('#nit').val('$nit');$('#idUsuarioEmp').val('$idUsuarioEmp');$('#usuarioEmp').val('$usuarioEmp');$('#password').val('$password');$('#hiddenPass').val('$password') class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded'>Editar</button>
                                        </td>
                                    </tr>";
                            }
                        ?>
                    </tbody>
                </table> 
            </div>
        </div>
</section>
</center>
<br>
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