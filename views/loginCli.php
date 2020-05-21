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
        <h3></h3>
    </header>
    
    <section>
        <form action="#" method="POST">
            <div class="container">
                <div class="row">                    
                        <div class="col-md-3">
                            <label for="usuarioCli" class="control-label">Usuario</label> <input type="text" name="usuarioCli" value="<?php if(isset($_REQUEST['usuarioCli'])){echo $_REQUEST['usuarioCli'];}?>"class="form-control">
                        </div>
                        <div class="col-md-3">            
                            <label for="paswordCli" class="control-laberl">Contreseña Cliente</label><input type="password" name="passwordCli"   class="form-control">                       
                        </div>
                        <div class="col-md-3">            
                            <label for="paswordEmp" class="control-laberl">Contreseña Empleado</label><input type="password" name="passwordEmp"  class="form-control">                       
                        </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <input type="submit" name="btnUsuario" value="continuar" class="btn btn-success">
                    </div>
                    <div class="col-md-3">
                        <input type="submit" name="btnValidarCliente" value="continuar"  class="btn btn-success">
                    </div>
                    <div class="col-md-3">
                        <input type="submit" name="btnValidarEmpleado" value="continuar"  class="btn btn-success">
                    </div>

                </div>
            </div>
        </form>        
    </section>
    <footer></footer>
    
</body>
</html>