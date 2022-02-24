<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title>BBDD</title>
    </head>
    <body>
        
        <div class="container p-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-body">
                            Iniciar sesión:
                            <form action="Login.php" method="POST">
                                <div class="form-group">
                                    <input type="text" name="usuario" class="form-control" placeholder="Escriba su usuario" autofocus required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="password" name="contra" class="form-control" placeholder="Escriba su contraseña" required>
                                </div>
                                <br>
                                <input type="submit" class="btn btn-success btn-block" value="Iniciar sesion">
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        
        <div class="container p-4 ">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-body">
                            Registrarse:
                            <form action="Anadir_usuario.php" method="POST">
                                <div class="form-group">
                                    <input type="text" name="usuario" class="form-control" placeholder="Escriba su usuario" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="password" name="contra" class="form-control" placeholder="Escriba su contraseña" required>
                                </div>
                                <br>
                                <input type="submit" class="btn btn-success btn-block" value="Registrarse">
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>