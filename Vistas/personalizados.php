<?php 
    require_once("../Controladores/productoControlador.php");

    $listarProductos = new productoControlador();
    $listar = $listarProductos->listarProducto();
    // var_dump($listarUsuarios);
    session_start();
    if(isset($_SESSION["carrito"])){
        $numeroProductos=sizeof($_SESSION["carrito"]);
        //var_dump($_SESSION["carrito"]);

    }else{
        $numeroProductos=0;
    }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Recursos/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Recursos/Css/index.css">
    <link rel="stylesheet" href="../Recursos/FontAwesome/css/all.css">
    <script src="../Recursos/jv/jquery-3.5.1.min.js "></script>
    <script src="../Recursos/jv/bootstrap.bundle.js "></script>
    <title>Document</title>
</head>

<body>
    <!--Iconos superiores------------------->
    <div id="infoSup" class="row">
        <div class="col-3">
            <img class="iconosSup_i" src="../Recursos/iconosmenus/TelB.png" alt=""> 319 459 04 93 -444 75 00
        </div>
        <div class="col-3">
            <img class="iconosSup_i" src="../Recursos/iconosmenus/PinB.png" alt="">CRA. 63A #44-27, MEDELLÍN
        </div>
        <div class="col-3">
            <img class="iconosSup_i" src="../Recursos/iconosmenus/Clock.png" alt="">LUNES A SÁBADO 8AM-5PM
        </div>
        <div class="col-1"></div>
        <div class="col-2">
            <a href="" style="margin: 0px; padding: 0px;">
                <img class="iconosSup_d" src="../Recursos/iconosmenus/FacebookB.png" alt=""></a>
            <a href="" style="margin: 0px; padding: 0px;">
                <img class="iconosSup_d" src="../Recursos/iconosmenus/Logo-TwitterB.png" alt=""></a>
            </a>
            <a href="" style="margin: 0px; padding: 0px;">
                <img class="iconosSup_d" src="../Recursos/iconosmenus/InstagramB.png" alt=""></a>
            </a>
            <a href="" style="margin: 0px; padding: 0px;">
                <img class="iconosSup_d" src="../Recursos/iconosmenus/whatssapB.png" alt=""></a>
            </a>
        </div>
    </div>
    <br />
    <!--Menú------------------------>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-custom">
            <a class="navbar-brand mr-auto" href="index.php">
                <img src="../Recursos/img/Logo Head.png" width="250" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">INICIO<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           | PRODUCTOS 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="personalizados.php">PERSONALIZADOS</a>
                            <a class="dropdown-item" href="#">ACCESORIOS</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">SERVICIOS</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">| SOBRE NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">| CONTACTO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cotizacionCliente.php"><strong id="contadorProductos">(<?php echo $numeroProductos ?>)</strong><i class="fas fa-shopping-cart fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <br/><br/>
    <!--Productos----------------------------------------------------------------------------->
    <div class="container">
    
        <div class="row">
        <?php foreach($listar as $producto) { ?>
            <!-- <input type="hidden" id="txtId" name="txtId" value="<?php echo $producto->getIdProducto() ?>"> -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-lg mb-5 bg-white rounded">
                    <img src="../Recursos/imgProductos/<?php echo $producto->getNombreImagen() ?>" class="card-img-top kard2 " alt="... ">
                    <div class="card-body ">
                        <h5 class="card-title " id="txtNombreP<?php echo $producto->getIdProducto() ?>"><?php echo $producto->getNombre() ?></h5>
                        <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="row">
                            <div class="col-3">
                                <button type="text" onclick="GuardarProducto(<?php echo $producto->getIdProducto() ?>)" class="btn btn-primary">Cotizar</button>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="text" name="" id="txtPrecioProducto<?php echo $producto->getIdProducto() ?>" value="<?php echo $producto->getPrecioBase() ?>" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-3 ">
                                <input type="number" class="form-control" min="1" value="1" name="" id="txtCantidadProducto<?php echo $producto->getIdProducto() ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
<script>

// var nombreP =document.getElementById('txtNombreP');
// var nombrePInner = nombreP.innerHTML;
// var precioP =document.getElementById('txtPrecioProducto').value;
// console.log(precioP);
    function GuardarProducto(id)
    {
        var nombreP =document.getElementById('txtNombreP'+id).innerHTML;
        //var nombrePInner = nombreP.innerHTML;
        var precioP =document.getElementById('txtPrecioProducto'+id).value;
        //alert(nombreP+precioP);
        var cantidadP =document.getElementById('txtCantidadProducto'+id).value;

        var formData = new FormData();
      
        formData.append('guardarProducto','guardarProducto');
        formData.append('id',id);
        formData.append('nombre',nombreP);
        formData.append('precio',precioP);
        formData.append('cantidad',cantidadP);
        $.ajax({
            url:'../Controladores/productoControlador.php',
            type:'POST',
            data:formData,
            contentType:false,
            processData:false,
            success: function(response)
            {
                alert("El producto "+response+" se ha guardado")
                document.getElementById("contadorProductos").innerHTML="("+response+")";

                if(response != 0)
                {
                    //alert(response);
                   
                }
            }
        });
    }
</script>
</html>