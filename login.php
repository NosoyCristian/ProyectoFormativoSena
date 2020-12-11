<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Recursos/Css/bootstrap.min.css">
    <link rel="stylesheet" href="Recursos/FontAwesome/css/all.css">    <title>Document</title>
</head>
<body style="background-image: url(Recursos/img/Slider3.jpg);">
    <form action="Controladores/usuarioControlador.php" method="POST">
        <div class="container " style="background-image: url(Recursos/img/Slider3.jpg);">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-lg-4">
                    <div class="card">
                        <h5 class="card-header">Login</h5>
                        <div class="card-body">
                            <div >
                                <div class="col-12 form-group">
                                    <label for="">Correo</label>
                                    <input type="text" class="form-control" name="txtCorreo"> 
                                </div>
                            </div>
                            <div>
                                <div class="col-12 form-group">
                                    <label for="">Contraseña</label>
                                    <input type="password" class="form-control" name="txtContrasena">
                                </div>
                            </div>
                            <div>
                                <div class="col-12">
                                    <button type="submit" name="acceder" class="btn btn-primary">Acceder</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>