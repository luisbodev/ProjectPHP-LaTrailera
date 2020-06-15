<div class="flex">
        <div class="bg md:flex md:justify-between md:px-2 md:py-1 md:items-center w-screen">
            <div class="flex items-center justify-between px-2 py-1 md:px-0 md:py-0">
                <div class="flex items-center">
                    <a href="controlAdminVentana.php"><img class="h-12" src="img/logo/Logo-LaTrailera2.svg" alt="Logo La Trailera"></a>
                </div>
                <a href="controlAdminVentana.php"><h1 class="text-white text-2xl font-bold">LA TRAILERA</h1></a>
                <div class="md:hidden">
                    <button  type="button" class="block text-white focus:outline-none hover:text-gray-400" onclick="menu()">
                        <svg id="cerrar" style="display: none;" class="h-6 w-6 fill-current bi bi-x-octagon" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"/></svg>

                        <svg id="abrir" class="h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>					
                </div>
            </div>
                <div id="opciones" class="hidden px-1 pb-1 md:flex md:p-0">
                    <?php
                        if($currentPage == 'Inicio'){?> <a href='#' class='block px-2 font-semibold rounded text-gray-800 bg-gray-200'>Inicio</a> <?php } else { ?> <a href='controlAdminVentana.php' class='block px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200'>Inicio</a> <?php }
                        if($currentPage == 'Envios'){?> <a href='#' class='block mt-1 px-2 font-semibold rounded text-gray-800 bg-gray-200 md:mt-0 md:ml-2'>Envios</a> <?php } else { ?> <a href='controlEnvio.php' class='block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2'>Envios</a> <?php }
                        if($currentPage == 'Carga'){?> <a href='#' class='block mt-1 px-2 font-semibold rounded text-gray-800 bg-gray-200 md:mt-0 md:ml-2'>Carga</a> <?php } else { ?> <a href='controlCarga.php' class='block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2'>Carga</a> <?php }
                        if($currentPage == 'Ruta'){?> <a href='#' class='block mt-1 px-2 font-semibold rounded text-gray-800 bg-gray-200 md:mt-0 md:ml-2'>Ruta</a> <?php } else { ?> <a href='controlRuta.php' class='block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2'>Ruta</a> <?php }
                        if($currentPage == 'Vehiculo'){?> <a href='#' class='block mt-1 px-2 font-semibold rounded text-gray-800 bg-gray-200 md:mt-0 md:ml-2'>Vehículo</a> <?php } else { ?> <a href='controlVehiculo.php' class='block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2'>Vehículo</a> <?php }
                        if($currentPage == 'Motorista'){?> <a href='#' class='block mt-1 px-2 font-semibold rounded text-gray-800 bg-gray-200 md:mt-0 md:ml-2'>Motorista</a> <?php } else { ?> <a href='controladorMotorista.php' class='block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2'>Motorista</a> <?php }
                        if($currentPage == 'Cliente'){?> <a href='#' class='block mt-1 px-2 font-semibold rounded text-gray-800 bg-gray-200 md:mt-0 md:ml-2'>Cliente</a> <?php } else { ?> <a href='controlCliente.php' class='block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2'>Cliente</a> <?php }
                        if($currentPage == 'Empleado'){?> <a href='#' class='block mt-1 px-2 font-semibold rounded text-gray-800 bg-gray-200 md:mt-0 md:ml-2'>Empleado</a> <?php } else { ?> <a href='controlEmpleado.php' class='block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2'>Empleado</a> <?php }
                    ?>
                    <a href="controlAdminVentana.php?c=1" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Cerrar Sesión</a>
                    <div class="block mt-1 px-2 text-white bg-orange-500 font-semibold rounded md:mt-0 md:ml-2">Usuario: <span id="userName" class="underline"><?php echo $_SESSION["administrador"]; ?></span></div>
                </div>
            </div>
        </div>
        <script>
            var isOpen=false;
            var opciones =document.getElementById('opciones');
            function menu(){
                if(!isOpen){
                    document.getElementById('cerrar').style='display:block;';
                    document.getElementById('abrir').style='display:none;';
                    opciones.classList.remove('hidden');
                    isOpen=true;
                }
                else{
                    document.getElementById('abrir').style='display:block;';
                    document.getElementById('cerrar').style='display:none;';
                    opciones.classList.add('hidden');
                    isOpen=false;
                }
            } 
        </script>