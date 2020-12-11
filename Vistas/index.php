<?php
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
    <title>Document</title>
    <link rel="stylesheet" href="../Recursos/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Recursos/Css/index.css">
    <link rel="stylesheet" href="../Recursos/FontAwesome/css/all.css">
    <script src="../Recursos/jv/jquery-3.5.1.min.js "></script>
    <script src="../Recursos/jv/bootstrap.bundle.js "></script>
</head>

<body>
    <!--Iconos superiores------------------->
    <div id="infoSup" class="row">
        <div class="col-12 col-md-3">
            <img class="iconosSup_i" src="../Recursos/iconosmenus/TelB.png" alt=""> 319 459 04 93 -444 75 00
        </div>
        <div class="col-12 col-md-3">
            <img class="iconosSup_i" src="../Recursos/iconosmenus/PinB.png" alt="">CRA. 63A #44-27, MEDELLÍN
        </div>
        <div class="col-12 col-md-3">
            <img class="iconosSup_i" src="../Recursos/iconosmenus/Clock.png" alt="">LUNES A SÁBADO 8AM-5PM
        </div>
        <div class="col-12 col-md-1"></div>
        <div class="col-12 col-md-2">
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
        <nav class="navbar navbar-expand-md navbar-custom">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <a class="navbar-brand mr-auto" href="index.html">
                <img src="../Recursos/img/Logo Head.png" width="250" height="70">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">INICIO<span class="sr-only">(current)</span></a>
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
    <!--Carrusel-------------------------->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../Recursos/img/Slider3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../Recursos/img/Slider1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../Recursos/img/Slider2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <h1 align="center">LOS MEJORES ESPECIALISTAS EN <span class="spanNaranja"> PUERTAS ELÉCTRICAS</span><br /> ESTÁN CON NOSOTROS
    </h1>

    <img class="banners" src="../Recursos/img/servicios.jpg" alt="">
    <!--cards Horizontales---------------------------------------------------------------------->
    <div class="container">
        <div class="card-group">
            <div class="card border-light">
                <div class="row no-gutters">
                    <div class="col-md-4" style="padding: 35px 0px 0px 20px;">
                        <img src="../Recursos/img/Garage.svg" class="card-img kard " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">PUERTAS, MOTORES Y ACCESORIOS</h5>
                            <p class="card-text">
                                Comercializamos distintos tipos de puertas, motores y accesorios para locales comerciales,
                                hogares, unidades residenciales e instalaciones industriales. Ofrecemos puertas prefabricadas,
                                motores electrónicos, receptores, sensores y más.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light">
                <div class="row no-gutters">
                    <div class="col-md-4" style="padding: 35px 0px 0px 20px;">
                        <img src="../Recursos/img/Personalizacion.svg" class="card-img kard" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">FABRICACIÓN DE PUERTAS PERSONALIZADAS</h5>
                            <p class="card-text"> 
                                Fabricamos puertas electrónicas personalizadas en madera, lámina, aluminio y otros materiales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light">
                <div class="row no-gutters">
                    <div class="col-md-4" style="padding: 35px 0px 0px 20px;">
                        <img src="../Recursos/img/Instalacion.svg" class="card-img kard" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">INSTALACIÓN DE PUERTAS Y MOTORES</h5>
                            <p class="card-text">
                                Instalamos puertas a la medida o prefabricadas con motores de diferentes marcas,
                                 tamaños, modelos y capacidad en espacios residenciales, industriales o comerciales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-group">
            <div class="card border-light">
                <div class="row no-gutters">
                    <div class="col-md-4" style="padding: 35px 0px 0px 20px;">
                        <img src="../Recursos/img/Keys.svg" class="card-img kard" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">CERRAJERÍA EN GENERAL</h5>
                            <p class="card-text">
                                Ofrecemos servicios de cerrajería en general como: ventanería, instalación de puertas
                                 de seguridad, estructuras metálicas, techos, cubiertas flotantes y más.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light">
                <div class="row no-gutters">
                    <div class="col-md-4" style="padding: 35px 0px 0px 20px;">
                        <img src="../Recursos/img/Reformas.svg" class="card-img kard" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">REFORMAS Y MODIFICACIONES</h5>
                            <p class="card-text">
                                Reformamos y modificamos puertas existentes para que funcionen adecuadamente con motores
                                electrónicos, u ofrecemos servicios de instalación de motores a proyectos existentes de
                                puertas hechas a la medida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light">
                <div class="row no-gutters">
                    <div class="col-md-4" style="padding: 35px 0px 0px 20px;">
                        <img src="../Recursos/img/Reparacion.svg" class="card-img kard" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">REPARACIÓN Y MANTENIMIENTO</h5>
                            <p class="card-text">
                                Reparamos y realizamos mantenimiento a puertas y motores con daños en maquinaria,
                                problemas electrónicos o fallas en sus accesorios. También ajustamos desperfectos
                                o deformidades de estructura.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <h2 align="center">¿POR QUÉ ELEGIRNOS?</h2>
        <br/>
        <!--Cards Verticales----------------------------------------------------------------------->
            <div class="card-deck">
                <div class="card shadow-lg mb-5 bg-white rounded">
                    <img src="../Recursos/img/Perssonalizacion.jpg " class="card-img-top kard2 " alt="... ">
                    <div class="card-body ">
                        <h5 class="card-title ">PERSONALIZACIÓN A SU MEDIDA</h5>
                        <p class="card-text ">
                            Sus ideas serán nuestros proyectos. A la medida de sus sueños trabajaremos.
                        </p>
                    </div>
                </div>
                <div class="card shadow-lg mb-5 bg-white rounded">
                    <img src="../Recursos/img/Acabados.jpg " class="card-img-top kard2 " alt="... ">
                    <div class="card-body ">
                        <h5 class="card-title ">DISEÑO Y ACABADOS DE ALTA CALIDAD</h5>
                        <p class="card-text ">
                            El uso de materiales de alta calidad son la garantía absoluta de todos nuestros trabajos.
                        </p>
                    </div>
                </div>
                <div class="card shadow-lg mb-5 bg-white rounded">
                    <img src="../Recursos/img/Seguridad.jpg " class="card-img-top kard2 " alt="... ">
                    <div class="card-body ">
                        <h5 class="card-title ">SEGURIDAD Y TRANQUILIDAD</h5>
                        <p class="card-text ">
                            En Metálicas Antioquia, todo lo que hacemos está respaldado por nuestra experiencia en el campo.
                            Entre nuestras principales prioridades se encuentra su seguridad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div align="center">
        <button id="btncontac" class="btn">CONTÁCTENOS</button>
    </div>
    <br/>
    <img class="banners" src="../Recursos/img/Banner-referencias.jpg" alt="">
    <br/>
    <br/>
    <br/>
    <div class="container" id="textoCentrado">
        <div class="row">
            <div class="col-4">blablabla Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda ipsum voluptatem sed sunt cum magni minima amet enim? Ex sunt quis amet reiciendis quidem impedit officiis voluptatem! Sequi, quibusdam quasi?
                <br/>_______________<br/><b>Cristian</b>
            </div>
            <div class="col-4 ">blablabla Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda ipsum voluptatem sed sunt cum magni minima amet enim? Ex sunt quis amet reiciendis quidem impedit officiis voluptatem! Sequi, quibusdam quasi? sapiente!
                <br/>_______________<br/><b>Cristian</b>
            </div>
            <div class="col-4 ">blablabla Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda ipsum voluptatem sed sunt cum magni minima amet enim? Ex sunt quis amet reiciendis quidem impedit officiis voluptatem! Sequi, quibusdam quasi?
                <br/>_______________<br/><b>Cristian</b></div>
        </div>
    </div>
    <br/><br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="banners">Nuestro requisito único y absoluto <br/><span class="spanNaranja">su satisfacción</span>
                    <br/>______________________
                </h3>
            </div>
        </div>
    </div>
</body>

</html>