
<script src="../Recursos/jv/jquery-3.5.1.min.js"></script>
<script src="../Recursos/jv/sweetalert2@9.js"></script>

<?php
require_once("../Modelos/conexion.php"); //Incluir  la conexion
require_once("../Modelos/cotizacionModelo.php");
require_once("../Modelos/detalleCotizacionModelo.php");
require_once("../Modelos/crudCotizacion.php");

class cotizacionControlador{

    public function __construct(){}

    public function registrarProducto(){
        $producto = new productoModelo();
        $crudProducto = new crudProducto();
        $producto->setIdtipodeProducto($_POST["txtTipodeProducto"]);
        $producto->setNombre($_POST["txtNombre"]);
        $producto->setNombreImagen($_FILES['archivo']['name']);
        $producto->setFechadeAlta($_POST["txtFechadeAlta"]);
        $producto->setDescripcion($_POST["txtDescripcion"]);
        $producto->setPrecioBase($_POST["txtPrecioBase"]);
        
        //var_dump($Usuario);
        $crudProducto->registrarProducto($producto);
       
        
    }

    public function editarProducto($idEditar){
       
        
    }

    public function modificarProducto(){
       
    }


    public function listarProducto(){
       
    }

    public function listarTipodeProducto(){
       
    }

    public function cambiarEstado($idProducto,$idEstado){
      
    }
}

$productoControlador = new productoControlador();


if(isset($_POST["enviarCotizacion"]))
{
    $crudCotizacion = new crudCotizacion();
    $cotizacion = new cotizacionModelo();
    $cotizacion->setObservacion($_POST["observacion"]);
    $cotizacion->setObservaciondePago($_POST["observaciondePago"]);
    $precios = [];
    $ids = [];

    $idCotizacion = $crudCotizacion->registrarCotizacion($cotizacion);
    if($idCotizacion!=0){
        foreach ( $_POST["precios"] as $precio ) { 
            $precios[]=$precio; 
        }
        foreach ( $_POST["productos"] as $codigo ) { 
            $ids[]=$codigo; 
        }
        for($i=0;$i<count($ids);$i++){
            $detalleCotizacion = new detalleCotizacionModelo();
            $detalleCotizacion->setIdProducto($ids[$i]);
            $detalleCotizacion->setIdProducto($ids[$i]);
        }
    }
}
?>