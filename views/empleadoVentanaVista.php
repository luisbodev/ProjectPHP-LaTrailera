<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventana Empleado - La Trailera</title>
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
        require 'menu/menuEmpleado.php';
    ?>

        <!--Page Content-->
        <div class="container my-8">
            <h1 id='welcome' class='text-center text-4xl font-bold'>Bienvenido Empleado</h1>
        </div>
        <center>
            <div class="w-full md:w-1/3 py-4 border-4 border-gray-600 rounded-lg bg-orange-500">
                <h3 class='text-center text-white text-2xl font-bold'>Menú</h3>
                <button><a href="controlEnvioEmpleado.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Envios</a></button><br>
                <button><a href="controlEmpleadoRuta.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Rutas</a></button><br>
                <button><a href="#" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Clientes</a></button><br>
                <button><a href="controlEmpleadoVentana.php?c=1" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Cerrar Sesión</a></button>


            </div>
        </center>
</body>
</html>