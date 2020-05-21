<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dependencias/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="dependencias/jquery.js"></script>
    <script type="text/javascript" src="dependencias/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="dependencias/sweetalert2.all.min.js"></script>
    <title>Ventana de Logeo</title>
</head>
<body>
    <header>
        <h3>Login</h3>
    </header>
    
    <section>
        <form action="#" method="POST">
        <div class="container">
            <div class="row">
                
                    <div class="col-md-3">
                        <label for="login" class="control-label">Usuario</label> <input type="text" name="login" class="form-control">
                    </div>
                    <div class="col-md-3">            
                        <label for="pasword" class="control-laberl">Contreseña</label><input type="password" name="password"  class="form-control">                       
                    </div>
                
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <input type="submit" name="validar" class="btn btn-success">
                </div>
            </div>
        </div>
        </form>        
    </section>
    <footer></footer>
    
</body>
</html>