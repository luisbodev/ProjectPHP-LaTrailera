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
</head>
<body>
    <?php
        $currentPage='Reportes';
        require 'menu/menuAdmin.php';
    ?>
    <br>
    <div class="text-center">
        <span class="font-bold text-4xl">Reportes del Sistema</span>
    </div>
    <br>
    <section>
    <center>
            <div class="w-full md:w-1/3 py-4 border-4 border-gray-600 rounded-lg bg-orange-500">
                <h3 class='text-center text-white text-2xl font-bold'>Generar Reportes</h3>
                <button class='w-64'><a href="../views/reportes/reporteKms.php" target='_blank' class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Reportes kilometraje</a></button><br>
                <button class='w-64'><a href="controlReporteRutas.php" class="block mt-1 px-2 text-2xl font-semibold rounded text-white bg hover:text-black hover:bg-white hover:border-4 hover:border-gray-600">Reportes de Rutas</a></button><br>
                


            </div>
        </center>
    </section>
</body>
</html>