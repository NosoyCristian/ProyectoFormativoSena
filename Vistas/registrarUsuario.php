<?php 

require_once("../Controladores/usuarioControlador.php");
$usuario = new usuarioControlador();
$listar = $usuario->listarTipoUsuario();

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
        <h2>Registrar Usuario</h2>
        <form name="frmInsumo" method="POST" action="../Controladores/usuarioControlador.php">

            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Apellido</label>
                <input type="text" name="txtApellido" id="txtApellido" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Cédula</label>
                <input type="text" name="txtCedula" id="txtCedula" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Celular</label>
                <input type="text" name="txtCelular" id="txtCelular" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Correo</label>
                <input type="text" name="txtCorreo" id="txtCorreo" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Dirección</label>
                <input type="text" name="txtDireccion" id="txtDireccion" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Fecha de Nacimiento</label>
                <input type="date" name="txtFechaNacimiento" id="txtFechaNacimiento" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Tipo de Usuario</label>
                <select name="txtTipoUsuario" id="txtTipoUsuario" class="form-control">
                    <option value="">Seleccione</option>
                    <?php foreach($listar as $cliente ){?>
                        <option value="<?php echo $cliente->getIdUsuario() ?>"><?php echo $cliente->getNombre() ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Contraseña</label>
                <input type="password" name="txtContrasena" id="txtContrasena" class="form-control">
            </div>
            <button type="submit" name="registrarUsuario" class="btn btn-success">Registrar Usuario</button>
        </form>
    </div>  
</body>
</html>
