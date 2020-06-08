<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Prueba</title>
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
</head>
<body >
    <div class="flex">
    <header class="bg md:flex md:justify-between md:px-2 md:py-1 md:items-center w-screen">
        <div class="flex items-center justify-between px-2 py-1 md:px-0 md:py-0">
            <div class="flex items-center">
                <a href="../index.php"><img class="h-12" src="img/logo/Logo-LaTrailera2.svg" alt="Logo La Trailera"></a>
            </div>
            <a href="../index.php"><h1 class="text-white text-2xl font-bold">LA TRAILERA</h1></a>
            <div class="md:hidden">
                <button  type="button" class="block text-white focus:outline-none hover:text-gray-400" onclick="menu()">
                    <svg id="cerrar" style="display: none;" class="h-6 w-6 fill-current bi bi-x-octagon" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"/></svg>

                    <svg id="abrir" class="h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>					
            </div>
        </div>
            <div id="opciones" class="hidden px-1 pb-1 md:flex md:p-0">
                <a href="#" class="block px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200">Inicio</a>
                <a href="controlEnvio.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Envios</a>
                <a href="controlCarga.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Carga</a>
                <a href="controlRuta.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Ruta</a>
                <a href="controlVehiculo.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Vehiculo</a>
                <a href="controladorMotorista.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Motorista</a>
                <a href="controlCliente.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Cliente</a>
                <a href="controlEmpleado.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Empleado</a>
                <a href="../index.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Cerrar Sesión</a>
                <div class="block mt-1 px-2 text-gray-800 bg-yellow-500 font-semibold rounded md:mt-0 md:ml-2">Usuario: <span id="userName" class="underline"></span></div>
            </div>
        </header>
</div>

        <!--Page Content-->
        <div class="container my-8">
            <h1 id='welcome' class='text-center text-4xl font-bold'>Bienvenido Administrador</h1>
        </div>
        <center>
            <div class="w-full md:w-1/3 py-4 border-4 border-gray-600 rounded-lg bg-orange-500">
                <h3 class='text-center text-white text-2xl font-bold'>Menú</h3>
                <button><a href="controlEnvio.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Envios</a></button><br>
                <button><a href="controlCarga.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Carga</a></button><br>
                <button><a href="controlRuta.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Ruta</a></button><br>
                <button><a href="controlVehiculo.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Vehiculo</a></button><br>
                <button><a href="controladorMotorista.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Motorista</a></button><br>
                <button><a href="controlCliente.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Cliente</a></button><br>
                <button><a href="controlEmpleado.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Empleado</a></button><br>
                <button><a href="../index.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Cerrar Sesión</a></button>


            </div>
        </center>
        <script>
            document.getElementById('userName').innerHTML=sessionStorage.getItem("user");
            document.getElementById('welcome').innerHTML+=": "+sessionStorage.getItem("user");
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
</body>
</html>