<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventana Administrador - La Trailera</title>
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
    <?php
        $currentPage='Inicio';
        require 'menu/menuAdmin.php';
    ?>

        <!--Page Content-->
        <div class="container my-8">
            <h1 id='welcome' class='text-center text-4xl font-bold'>Bienvenido Administrador</h1>
        </div>
        <center>
            <div class="w-full md:w-1/3 py-4 border-4 border-gray-600 rounded-lg bg-orange-500">
                <h3 class='text-center text-white text-2xl font-bold'>Menú</h3>
                <button><a href="controlEnvio.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Envios</a></button><br>
                <button><a href="controlRuta.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Ruta</a></button><br>
                <button><a href="controlVehiculo.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Vehiculo</a></button><br>
                <button><a href="controladorMotorista.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Motorista</a></button><br>
                <button><a href="controlCliente.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Cliente</a></button><br>
                <button><a href="controlEmpleado.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Gestión Empleado</a></button><br>
                <button><a href="controlAdminVentana.php?c=1" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Cerrar Sesión</a></button>


            </div>
        </center>
        <script>
            
            document.getElementById('welcome').innerHTML+=": "+sessionStorage.getItem("user");
            
        </script>
</body>
</html>