<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - La Trailera</title>
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
<body>
    <header>
        
    </header>
    
    <section >
        <div class="flex h-screen justify-center items-center">
            <div class="flex flex-col justify-center w-full sm:1/2 md:w-2/5 lg:w-1/4">
                <form action="#" method="POST" class="bg px-2 py-4 border-4 border-gray-600 rounded-lg" >
                    <div class="">
                        <div class="flex justify-center m-4">
                            <a href="../index.php">
                                <img src="img/logo/Logo-LaTrailera.svg" width="200px">
                            </a>
                        </div>
                        <hr>
                        <div class="text-center mt-4">
                            <span class="text-white font-bold text-2xl">Iniciar Sesion Cliente</span>
                        </div>
                        <div>
                            <label for="usuarioCli" class="text-white font-bold text-1xl">Usuario:</label> <br>
                            <input type="text" name="usuarioCli" id="usuarioCliente" class="bg-white focus:outline-none focus:shadow-outline border border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly>

                            <label for="passwordCli" class="text-white font-bold text-1xl">Contreseña:</label> <br>
                            <input type="password" name="passwordCli" class="bg-white focus:outline-none focus:shadow-outline border border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" >
                            <div class="flex justify-center">
                                <input type="submit" name="btnValidarCliente" value="Ingresar" class="bg-orange-500 text-white hover:bg-white hover:text-gray-800 font-bold py-2 px-4 my-4 rounded-full">
                            </div>
                            <div class='ml-4'>
                                <a href="../index.php" class='font-bold text-white hover:underline'>← Regresar</a>
                            </div>
                    </div>
                                       
                    
                </form>
            </div>
        </div>



               
    </section>
    <footer></footer>
    
    <script type="text/javascript">
        document.getElementById('usuarioCliente').value = sessionStorage.getItem("user");
    </script>
    
</body>
</html>