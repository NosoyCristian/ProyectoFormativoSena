<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="../Recursos/jv/jquery-3.5.1.min.js "></script>
    <script src="../Recursos/jv/bootstrap.bundle.min.js"></script>
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
        <h2 align="center">Cotizaciones</h2>
        <br/>
        <div class="card">
            <div class="card-header">
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
            <div class="card-body">
                <table id="tblProductos">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Fecha de Alta</th>
                            <th>Fecha de Vigencia</th>
                            <th>Estado</th>
                            <th>Observación</th>
                            <th>Observación Pago</th>
                            <th>Iva</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>02/05/2020</td>
                            <td>02/12/2020</td>
                            <td>Sin Cotizar</td>
                            <td>Ninguna</td>
                            <td>Se cancela el 50% inicial</td>
                            <td>19%</td>
                            <td>1200000</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" data-toggle="tooltip" data-placement="top" title="Modificar"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Detalles"><i class="fas fa-info"></i></button>
                                    <a type="button" href="#" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Cambiar Estado"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>02/05/2020</td>
                            <td>02/12/2020</td>
                            <td>En proceso</td>
                            <td>Ninguna</td>
                            <td>Se cancela el 50% inicial</td>
                            <td>19%</td>
                            <td>1200000</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-info"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fas fa-exchange-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>02/05/2020</td>
                            <td>02/12/2020</td>
                            <td>Sin Cotizar</td>
                            <td>Ninguna</td>
                            <td>Se cancela el 50% inicial</td>
                            <td>19%</td>
                            <td>1200000</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-info"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fas fa-exchange-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>02/05/2020</td>
                            <td>02/12/2020</td>
                            <td>Sin Cotizar</td>
                            <td>Ninguna</td>
                            <td>Se cancela el 50% inicial</td>
                            <td>19%</td>
                            <td>1200000</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-info"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fas fa-exchange-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>02/05/2020</td>
                            <td>02/12/2020</td>
                            <td>Terminada</td>
                            <td>Ninguna</td>
                            <td>Se cancela el 50% inicial</td>
                            <td>19%</td>
                            <td>1200000</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-info"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fas fa-exchange-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>02/05/2020</td>
                            <td>02/12/2020</td>
                            <td>Terminada</td>
                            <td>Ninguna</td>
                            <td>Se cancela el 50% inicial</td>
                            <td>19%</td>
                            <td>1200000</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-info"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fas fa-exchange-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>02/05/2020</td>
                            <td>02/12/2020</td>
                            <td>Cancelada</td>
                            <td>Ninguna</td>
                            <td>Se cancela el 50% inicial</td>
                            <td>19%</td>
                            <td>1200000</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-info"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fas fa-exchange-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>02/05/2020</td>
                            <td>02/12/2020</td>
                            <td>Terminada</td>
                            <td>Ninguna</td>
                            <td>Se cancela el 50% inicial</td>
                            <td>19%</td>
                            <td>1200000</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-info"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fas fa-exchange-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>02/05/2020</td>
                            <td>02/12/2020</td>
                            <td>Cancelada</td>
                            <td>Ninguna</td>
                            <td>Se cancela el 50% inicial</td>
                            <td>19%</td>
                            <td>1200000</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-info"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fas fa-exchange-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>02/05/2020</td>
                            <td>02/12/2020</td>
                            <td>Cancelada</td>
                            <td>Ninguna</td>
                            <td>Se cancela el 50% inicial</td>
                            <td>19%</td>
                            <td>1200000</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-info"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fas fa-exchange-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>02/05/2020</td>
                            <td>02/12/2020</td>
                            <td>Sin Cotizar</td>
                            <td>Ninguna</td>
                            <td>Se cancela el 50% inicial</td>
                            <td>19%</td>
                            <td>1200000</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-info"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fas fa-exchange-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modificar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Observación</label>
                                </div>
                                <div class="col-6">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Observación Pago</label>
                                </div>
                                <div class="col-6">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Estado</label>
                                </div>
                                <div class="col-6">
                                    <select name="" id="">
                                        <option value="">Seleccionar</option>
                                        <option value="">Sin cotizar</option>
                                        <option value="">En ejecución</option>
                                        <option value="">Terminada</option>
                                        <option value="">Cancelada</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success">Guardar</button>
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

</html>