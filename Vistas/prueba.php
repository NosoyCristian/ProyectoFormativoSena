<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Recursos/Css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    
    <form action="../Controladores/productoControlador.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="form-group">
                <label for="">Archivo</label>
                <input type="file" id="archivo" name="archivo" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="txt" id="txtNombre" name="txtNombre" class="form-control">
            </div>
            <button type="submit" id="enviarArchivo" name="enviarArchivo" class="btn btn-success">Enviar</button>
        </div>
    </form>
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
            One of three columns
            </div>
            <div class="col">
            One of three columns
            </div>
            <div class="col">
            One of three columns
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
            One of three columns
            </div>
            <div class="col">
            One of three columns
            </div>
            <div class="col">
            One of three columns
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col">
            One of three columns
            </div>
            <div class="col">
            One of three columns
            </div>
            <div class="col">
            One of three columns
            </div>
        </div>
    </div>
</body>

</html>