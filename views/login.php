<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dependencias/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="dependencias/jquery.js"></script>
    <script type="text/javascript" src="dependencias/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="dependencias/sweetalert2.all.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Iniciar Sesión - La Trailera</title>
</head>
<body>
    <header>
        <h3></h3>
    </header>
    
    <section >
        <div class="flex h-screen justify-center items-center">
            <div class="flex flex-col justify-center w-full sm:1/2 md:w-2/5 lg:w-1/4">
                <form action="#" method="POST" class="px-2 py-4 border-4 border-gray-600 rounded-lg" >
                    <div>
                        <div class="flex justify-center">
                            <a href="../index.php">
                                <img src="img/logo/Logo-LaTrailera.svg" width="200px">
                            </a>
                        </div>
                        <hr>
                        <div class="text-center mt-4">
                            <span class="font-bold text-2xl">Iniciar Sesion</span>
                        </div>
                        <div>
                            <label for="usuarioCli" class="font-bold text-1xl">Usuario:</label> <br>
                            <input type="text" name="usuarioCli" class="bg-white focus:outline-none focus:shadow-outline border border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" value="<?php if(isset($_REQUEST['usuarioCli'])){echo $_REQUEST['usuarioCli'];}?>">
                            <div class="flex justify-center">
                                <input type="submit" name="btnUsuario" value="Continuar" id="btnUsuario" class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 my-4 rounded-full">
                            </div>
                              
                        </div>
                    </div>
                </form>
            </div>
        </div>



               
    </section>
    <footer></footer>
    
</body>
</html>