<?php 

require_once("../Controladores/productoControlador.php");
$producto = new productoControlador();
$listar = $producto->listarTipodeProducto();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Recursos/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Recursos/Css/index.css">
    <link rel="stylesheet" href="../Recursos/FontAwesome/css/all.css">    <title>Document</title>
</head>
<body>
    <div class="container ">
        <h2>Registrar Producto</h2>
        <form name="frmInsumo" method="POST" enctype="multipart/form-data" action="../Controladores/productoControlador.php">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Imagen del producto</label>
                <input type="file" id="archivo" name="archivo" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Tipo de Producto</label>
                <select name="txtTipodeProducto" id="txtTipodeProducto" class="form-control">
                    <option value="">Seleccione</option>
                    <?php foreach($listar as $cliente ){?>
                        <option value="<?php echo $cliente->getIdProducto() ?>"><?php echo $cliente->getNombre() ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Fecha de Alta</label>
                <input type="date" name="txtFechadeAlta" id="txtFechadeAlta" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Descripción</label>
                <input type="text" name="txtDescripcion" id="txtDescripcion" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Precio Base</label>
                <input type="text" name="txtPrecioBase" id="txtPrecioBase" class="form-control">
            </div>
           
            <button type="submit" name="registrarProducto" class="btn btn-success">Registrar Producto</button>
        </form>
    </div>  
</body>
</html>
