<?php
session_start();
if(!isset($_SESSION["nombres"]))
{
    header("Location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Recursos/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Recursos/FontAwesome/css/all.css">
    <link rel="stylesheet" href="../Recursos/Css/indexAdmin.css">
    <script src="../Recursos/jv/jquery-3.5.1.min.js"></script>
    <script src="../Recursos/jv/bootstrap.bundle.min.js"></script>
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
                        <a class="nav-link" href="Usuarios.php">| USUARIOS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Clientes.php">| CLIENTES</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Proveedores.php">| PROVEEDORES</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Insumos.php">| INSUMOS</a>
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

    <h2 align="center">Bienvenido a Cotización Assistant</h2>


</body>


</html>