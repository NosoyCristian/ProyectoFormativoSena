<?php 
    require_once("../Controladores/productoControlador.php");

    $listarProductos = new productoControlador();
    $listar = $listarProductos->listarProducto();
    // var_dump($listarUsuarios);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="../Recursos/jv/jquery-3.5.1.min.js "></script>
    <script src="../Recursos/jv/bootstrap.bundle.min.js"></script>
    <script src="../Recursos/jv/sweetalert2@9.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../Recursos/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Recursos/Css/indexAdmin.css">
    <link rel="stylesheet" href="../Recursos/FontAwesome/css/all.css">
</head>

<body>
    <br />
    <!--Menú------------------------>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-custom">
            <a class="navbar-brand" href="indexAdmin.php">
                <img src="../Recursos/img/Logo Head.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="indexAdmin.php">INICIO<span class="sr-only">(current)</span></a>
                    </li>
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           | USUARIOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="personalizados.html">PERSONALIZADOS</a>
                            <a class="dropdown-item" href="#">ACCESORIOS</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">SERVICIOS</a>
                        </div>-->
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">| USUARIOS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">| CLIENTES</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">| PROVEEDORES</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">| INSUMOS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="CotizacionesAdmin.php">| COTIZACIONES</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="reportes.php">| REPORTES</a>
                    </li>
                    <li class="nav-item " style="border: 1px solid black;">
                    <a class="nav-link" href="../Controladores/usuarioControlador.php?cerrarSesion">Salir</a>
                    </li>
                </ul>
                <!-- <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                    <a class="nav-link" href="../Controladores/usuarioControlador.php?cerrarSesion">Salir</a>
                    </li>
                </ul> -->
            </div>
        </nav>
    </div>
    <div class="container">
        <h2 align="center">Productos</h2>
        <br/>
        <div class="card">
            <div class="card-header">
                <a href="../Controladores/productoControlador.php?registrarProducto" class="btn btn-primary">Agregar</a>
            </div>
            <div class="card-body">
                <table id="tblProductos">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>FechadeAlta</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listar as $producto) { ?>
                        <tr>
                            <td><?php echo $producto->getIdProducto() ?></td>
                            <td><?php echo $producto->getNombre() ?></td>
                            <td><?php echo $producto->getFakeTipo() ?></td>
                            <td><?php echo $producto->getFechadeAlta() ?></td>
                            <td><?php echo ($producto->getEstado()==1) ? "Activado": "Desactivado"; ?></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#staticBackdrop" data-toggle="tooltip" data-placement="top"
                                    title="Modificar" onclick="cargarProducto(<?php echo $producto->getIdProducto() ?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal"
                                    data-target="#staticBackdrop2" data-toggle="tooltip" data-placement="top"
                                    title="Detalles" onclick="cargarDetalles(<?php echo $producto->getIdProducto() ?>)">
                                        <i class="fas fa-info"></i>
                                    </button>
                                    <?php if($producto->getEstado()==0){ ?>
                                        <a type="button" href="../Controladores/productoControlador.php?idEstado=1&idProducto=<?php echo $producto->getIdProducto() ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top"
                                            title="Cambiar Estado"><i class="fas fa-exchange-alt"></i>
                                        </a>
                                    <?php } else { ?>
                                        <a type="button" href="../Controladores/productoControlador.php?idEstado=0&idProducto=<?php echo $producto->getIdProducto() ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                            title="Cambiar Estado"><i class="fas fa-exchange-alt"></i>
                                        </a>
                                    <?php } ?>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ModalModificar -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modificar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="frmModificarProducto" id="frmModificarProducto" method="POST" action="../Controladores/productoControlador.php">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Nombre:</label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="modificarProducto">
                                    <input type="hidden" id="txtIdProducto" name="txtIdProducto">
                                    <input type="text" id="txtNombre" name="txtNombre"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Descripción:</label>
                                <div class="col-sm-9">
                                    <input type="text" id="txtDescripcion"  name="txtDescripcion"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Precio Base:</label>
                                <div class="col-sm-9">
                                    <input type="text" id="txtPrecioBase" name="txtPrecioBase"  class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="modificarProductos" class="btn btn-success">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- ModalDetalles -->
     <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detalles</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="frmModificarProducto" id="frmModificarProducto" method="POST" action="../Controladores/productoControlador.php">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <img src="" class=" " width="100%" height="70%"
                                        id="imagen2"  name="imagen2" alt="">
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Código:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="txtIdProducto2" id="txtIdProducto2" readonly class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Nombre:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="txtNombre2" id="txtNombre2" readonly class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Tipo:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="txtTip2o" id="txtTipo2" readonly class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Descripción:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="txtDescripcion2" id="txtDescripcion2" readonly rows="4"></textarea>
                                            <!-- <input type="text" name="txtDescripcion2" id="txtDescripcion2" readonly class="form-control"> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Precio Base:</label>
                                        
                                        <div class="col-sm-9">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text">$</div>
                                                </div>
                                                <input type="text" name="txtPrecioBase2" id="txtPrecioBase2" readonly class="form-control">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Fecha de Alta:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="txtFechadeAlta2" id="txtFechadeAlta2" readonly class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                        <!-- <button type="submit" name="modificarProductos" class="btn btn-success">Modificar</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $('#tblProductos').DataTable();
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>

<script>
    $(document).ready(function(){
        $("#frmModificarProducto").submit(function(event){
            event.preventDefault();

            let url="../Controladores/productoControlador.php";
            $.ajax({
                type: "POST",
                url: url,
                data:$("#frmModificarProducto").serialize(),
                success: function(data){
                    $("#staticBackdrop").modal("hide");
                    //window.location="Productos.php";
                }
            });
            Swal.fire({ 
                position: 'center',
                icon: 'success',
                title: 'Modificado',
                text:'Se ha modificado el producto correctamente.',
                showConfirmButton: false,
                timer: 1400
            }).then(function() {
                // Redirect the user
                window.location = "Productos.php";
            })
        });
    });

    function cargarProducto($id){
        //alert($id);
        var formData = new FormData();
        formData.append('editarProducto','editarProducto');
        formData.append('idProducto',$id);
        $.ajax({
            url:'../Controladores/productoControlador.php',
            type:'POST',
            data:formData,
            contentType:false,
            processData:false,
            success: function(response){
                // alert(response);
                var arrayDeCadenas = response.split("-");
                $("#txtIdProducto").val(arrayDeCadenas[2]);
                $("#txtNombre").val(arrayDeCadenas[3]);
                $("#txtDescripcion").val(arrayDeCadenas[4]);
                $("#txtPrecioBase").val(arrayDeCadenas[5]);
                    
                //alert(arrayDeCadenas);
                    
            }
        });
    }

    function cargarDetalles($id){
        //alert($id);
        var formData = new FormData();
        formData.append('detallesProducto','detallesProducto');
        formData.append('idProducto',$id);
        $.ajax({
            url:'../Controladores/productoControlador.php',
            type:'POST',
            data:formData,
            contentType:false,
            processData:false,
            success: function(response){
                //alert(response);
                var arrayDeCadenas = response.split("|");
                $("#txtIdProducto2").val(arrayDeCadenas[1]);
                $("#txtNombre2").val(arrayDeCadenas[2]);
                $("#txtDescripcion2").val(arrayDeCadenas[3]);
                $("#txtPrecioBase2").val(arrayDeCadenas[4]);
                $("#txtTipo2").val(arrayDeCadenas[5]);
                $("#txtFechadeAlta2").val(arrayDeCadenas[6]);
                var nombreImagen =arrayDeCadenas[8];
                var b = document.getElementById("imagen2"); 
                b.setAttribute("src","../Recursos/imgProductos/".concat(nombreImagen));
                    
                //alert(arrayDeCadenas);
                    
            }
        });
    }
</script>

</html>