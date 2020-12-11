<?php
session_start();

if(isset($_SESSION["carrito"]))
{
// var_dump($_SESSION["carrito"]);
    // foreach($_SESSION["carrito"] as $indice =>$arreglo){
    //     echo "<hr>Id: ".$indice."</hr>";
    //     echo " Nombre: ".$arreglo['nombre']." ";
    //     echo "Precio: ".$arreglo['precio'];
    //     // session_destroy();
    }
// session_destroy();
// }
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
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
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

    <div class="container">
        <h2 align="center">Mi Cotización</h2>
        <br/>
        <div class="card ">
            <div class="card-header">
                <div class="form-group">
                    <label for="">Nombre cliente</label>
                    <input type="text" class="form-control" id="txtNombreCliente">
                </div>
                <div class="form-group">
                    <label for="">Observación</label>
                    <input type="text" class="form-control" id="txtObservacion">
                </div>
                <div class="form-group">
                    <label for="">Observación Pago</label>
                    <input type="text" class="form-control" id="txtObservacionPago">
                </div>
            </div>
            <div class="card-body">
                <table id="tblProductos" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($_SESSION["carrito"])){
                            foreach($_SESSION["carrito"] as $indice =>$arreglo){?>
                        <tr>
                            <td class="codigoClase" id="<?php echo $indice ?>"><?php echo $indice ?></td>
                            <td><?php echo $arreglo["nombre"] ?></td>
                            <td class="precioClase"><?php echo $arreglo["precio"] ?></td>
                            <td>
                               
                            </td>
                        </tr>
                        <?php } } ?>
                        
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <button class="btn btn-success" onclick="guardarCotizazcion()">Enviar Cotización</button>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#tblProductos').DataTable();
    });
</script>
<script>
    function guardarCotizazcion() {
        let nombreCliente = document.getElementById('txtNombreCliente').value;
        let observacion = document.getElementById('txtObservacion').value;
        let observaciondePago = document.getElementById('txtObservacionPago').value;
        let productosCl = $(".codigoClase");
        let preciosCl = $(".precioClase");

        let fr = new FormData();

        fr.append("enviarCotizacion", "enviarCotizacion");
        fr.append("nombreCliente", nombreCliente);
        fr.append("observacion", observacion);
        fr.append("observaciondePago", observaciondePago);

        productosCl.each(function (i, e) {
            fr.append("productos[]", e.id);
        })

        preciosCl.each(function (i, e) {
            fr.append("precios[]", e.innerHTML);
        })


        $.ajax({
            url: '../Controladores/productoControlador.php',
            type: 'POST',
            data: fr,
            dataType: 'html',
            processData: false,
            contentType: false
        }).done(function (respuesta) {
            alert(respuesta);
            if (respuesta == 1) {
                Swal.fire("Se creo la receta", "Los datos fueron guardados exitosamente", "success");
                // location.href = "misRecetas.jsp";
            }
        })
    }
</script>
</html>