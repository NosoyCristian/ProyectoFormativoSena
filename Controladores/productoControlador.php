
<script src="../Recursos/jv/jquery-3.5.1.min.js"></script>
<script src="../Recursos/jv/sweetalert2@9.js"></script>

<?php
require_once("../Modelos/conexion.php"); //Incluir  la conexion
require_once("../Modelos/productoModelo.php");
require_once("../Modelos/tipoProductoModelo.php");
require_once("../Modelos/crudProducto.php");

class productoControlador{

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
        //Datos para guardar imagen
        $archivo = $_FILES['archivo']['name'];
        $tipo = $_FILES['archivo']['type'];
        $tamano = $_FILES['archivo']['size'];
        $temp = $_FILES['archivo']['tmp_name'];

        if (move_uploaded_file($temp, '../Recursos/imgProductos/'.$archivo)) {
        //echo 'archivo subido';
        }
    }

    public function editarProducto($idEditar){
        $crudProducto = new crudProducto();
        return $busqueda = $crudProducto->editarProducto($idEditar);
        
    }

    public function modificarProducto(){
        $crudProducto = new crudProducto();
        $producto = new productoModelo;
        $producto->setNombre($_POST["txtNombre"]);
        $producto->setDescripcion($_POST["txtDescripcion"]);
        $producto->setPrecioBase($_POST["txtPrecioBase"]);
        $producto->setIdProducto($_POST["txtIdProducto"]);
        $crudProducto->modificarProducto($producto);
        // return $producto->setNombre($_POST["txtNombre"]);
    }


    public function listarProducto(){
        $crudProducto = new crudProducto();
        $listarProductos = $crudProducto->listarProductos();
        return $listarProductos;
    }

    public function listarTipodeProducto(){
        $crudProducto = new crudProducto();
        $listarTipodeProductos = $crudProducto->listarTipodeProducto();
        return $listarTipodeProductos;
    }

    public function cambiarEstado($idProducto,$idEstado){
        $crudProducto = new crudProducto();
        $producto = new productoModelo();
        $producto->setIdProducto($idProducto);
        $producto->setEstado($idEstado);
        $crudProducto->cambiarEstado($producto);
    }

    public function desplegarVista($ruta){
        require_once($ruta);
    }
}
$productoControlador = new productoControlador();

if(isset($_GET["registrarProducto"]))
{
    $productoControlador->desplegarVista("../Vistas/registrarProducto.php");
}
elseif(isset($_POST["registrarProducto"]))
{
    $productoControlador->registrarProducto();
    header("Location:../Vistas/Productos.php");
    // $productoControlador->desplegarVista("../Vistas/Productos.php");
}
elseif(isset($_GET["listarProducto"]))
{
    $usuarioControlador->desplegarVista("../Vistas/Productos.php");
}
elseif(isset($_POST["editarProducto"]))
{
    //$productoControlador->editarProducto($editarProducto);
    //$usuarioControlador->desplegarVista("../Vistas/Productos.php");
    $id = $_POST["idProducto"];
    $busqueda = $productoControlador->editarProducto($id);
    echo "-".$busqueda[0]."-".$busqueda[1]."-".$busqueda[2]."-".$busqueda[3];
}
elseif(isset($_POST["modificarProducto"]))
{
    $productoControlador->modificarProducto();
    //echo "ok";
    // echo $_POST["txtNombre"].
    // $_POST["txtDescripcion"].
    // $_POST["txtPrecioBase"].
    // $_POST["txtIdProducto"];
}
elseif(isset($_GET["idEstado"]))
{
    $idEstado=$_GET["idEstado"];
    $idProducto=$_GET["idProducto"];
    $productoControlador->cambiarEstado($idProducto,$idEstado);
    header("Location:../Vistas/Productos.php");
    //$productoControlador->desplegarVista("../Vistas/Productos.php");

}
elseif(isset($_POST["detallesProducto"]))
{
    //$productoControlador->editarProducto($editarProducto);
    //$usuarioControlador->desplegarVista("../Vistas/Productos.php");
    $id = $_POST["idProducto"];
    $busqueda = $productoControlador->editarProducto($id);
    echo "|".$busqueda[0]."|".$busqueda[1]."|".$busqueda[2]."|"
    .$busqueda[3]."|".$busqueda[4]."|".$busqueda[5]."|".$busqueda[6]."|".$busqueda[7];
}
elseif(isset($_POST["guardarProducto"]))
{
    $idP=$_POST["id"];
    $nombreP=$_POST["nombre"];
    $precioP=$_POST["precio"];
    $cantidadP=$_POST["cantidad"];
    session_start();
    $_SESSION["carrito"][$idP]["nombre"]=$nombreP;
    $_SESSION["carrito"][$idP]["precio"]=$precioP;
    $_SESSION["carrito"][$idP]["cantidad"]=$cantidadP;
    echo sizeof($_SESSION["carrito"]);
}
elseif(isset($_POST["enviarCotizacion"]))
{
    $nombreCliente=$_POST["nombreCliente"];
    $observacion=$_POST["observacion"];
    $ids[]="";
    $precios = [];
    $caca=0;
    //echo "sizeof($_POST(productos))";
    // foreach ( $_POST["precios"] as $como ) { 
       
    //     $caca=$como+$caca; 
        
    // }
    
    foreach ( $_POST["precios"] as $como ) { 
       
        $precios[]=$como; 
        
    }
    echo $precios[0]."-".$precios[1];
}
?>