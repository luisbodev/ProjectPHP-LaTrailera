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
        $currentPage='Reportes';
        require 'menu/menuAdmin.php';
    ?>
    <br>
    <div class="text-center">
        <span class="font-bold text-4xl">Generar Reporte de Rutas</span>
    </div>
    <br>
<center>
<section>
    <div class="container">   
    <form action="../views/reportes/reporteRutas.php" method="GET" class="px-16 py-4 border-4 border-gray-600 rounded-lg" target='_blank'>
    <div class="md:flex">
        <div class="w-full md:w-1/2">
            <span class="font-bold text-xl">Cliente</span>
            <!-- <input type="text" name="id" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required> -->
            <div class='relative'>
                            <select name="id" id="id" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                                    <option value=""></option>
                                    <?php
                                        foreach ($datosUsuarioCli as $u) {
                                            echo "<option value=".$u['idUsuarioCli'].">".$u['usuarioCli']."</option>";
                                        }
                                    ?>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                            </div>
        </div>
        <div class="w-full md:w-1/2 md:ml-2">
            <span class="font-bold text-xl">Motorista</span>
            <div class='relative'>
              <select name="id2" required id="id2" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
                        <option></option>
                        <?php 
                        foreach ($motor as $m) {

                           echo "<option value=".$m["idMotorista"].">".$m["nombre"]."</option>";
                        }
                         ?>
              </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
        </div>
    </div>
    <br>
        <span class="font-bold text-2xl">Rango de Fechas</span>
    <br>
    <div class="md:flex">
        <div class="w-full md:w-1/2">
        <span class="font-bold text-xl">Inicio</span>
        <input type="date" name="f1" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
        </div>
        <div class="w-full md:w-1/2 md:ml-2">
        <span class="font-bold text-xl">Fin</span>
        <input type="date" name="f2" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required>
        </div>
    </div>
    <br>
        <input type="submit" value='Generar Reporte' class='bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded' >
    <br>
    </form>
    <div class='m-4'>
            <a href="controlReportes.php" class='text-xl font-bold text-blue-700 hover:text-red-800 hover:underline'>← Regresar</a>
        </div>
    </div>
</section>
</center>
</body>
</html>