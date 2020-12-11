
<script src="../Recursos/jv/jquery-3.5.1.min.js"></script>
<script src="../Recursos/jv/sweetalert2@9.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> -->

<?php
require_once("../Modelos/conexion.php"); //Incluir  la conexion
require_once("../Modelos/usuarioModelo.php");
require_once("../Modelos/tipoUsuarioModelo.php");
require_once("../Modelos/crudUsuario.php");

class usuarioControlador{

    public function __construct(){}

    public function registrarUsuario(){
        $usuario = new usuarioModelo();
        $crudUsuario = new crudUsuario();
        $usuario->setNombre($_POST["txtNombre"]);
        $usuario->setApellido($_POST["txtApellido"]);
        $usuario->setCedula($_POST["txtCedula"]);
        $usuario->setCelular($_POST["txtCelular"]);
        $usuario->setCorreo($_POST["txtCorreo"]);
        $usuario->setDireccion($_POST["txtDireccion"]);
        $usuario->setFechaNacimiento($_POST["txtFechaNacimiento"]);
        $usuario->setTipoUsuario($_POST["txtTipoUsuario"]);
        $contrasenaHash = password_hash($_POST["txtContrasena"],PASSWORD_DEFAULT, ['cost' =>10]);
        $usuario->setContrasena($contrasenaHash);
        

        //var_dump($Usuario);
         $crudUsuario->registrarUsuario($usuario);
    }

    public function editarInsumo($idEditar){
        // $crudInsumo = new crudInsumo();
        // return $busqueda = $crudInsumo->editarInsumo($idEditar);
        
    }

    public function modificarInsumo(){
        // $crudInsumo = new crudInsumo();
        // $insumo = new insumoModelo;
        // $insumo->setNombre($_POST["txtNombre"]);
        // $insumo->setMedida($_POST["txtMedida"]);
        // $insumo->setIdMedida($_POST["und"]);
        // $insumo->setIdInsumo($_POST["txtId"]);
        // $crudInsumo->modificarInsumo($insumo);
    }


    public function listarUsuario(){
        $crudUsuario = new crudUsuario();
        $listarUsuarios = $crudUsuario->listarUsuarios();
        return $listarUsuarios;
    }

    public function listarTipoUsuario(){
        $crudUsuario = new crudUsuario();
        $listarTipoUsuarios = $crudUsuario->listarTipoUsuario();
        return $listarTipoUsuarios;
    }

    public function eliminarUsuario($id){
        // $crudInsumo = new crudInsumo();
        // return $busqueda = $crudInsumo->eliminarInsumo($id);
    }
    public function verificarLogin(){
        $usuario = new usuarioModelo();
        $usuario->setCorreo($_POST["txtCorreo"]);
        $usuario->setContrasena($_POST["txtContrasena"]);
        $crudUsuario = new crudUsuario();
        $usuario = $crudUsuario->verificarLogin($usuario);
        //var_dump($usuario);
        if($usuario->getExiste()==1)
        {
            session_start();
            $_SESSION["idUsuario"] = $usuario->getIdUsuario();
            $_SESSION["nombres"] = $usuario->getNombre()." ".$usuario->getApellido();
            //header("Location:../Vistas/indexAdmin.html");
        }
        else
        {
            header("Location:../login.php");
        }
    }

    public function cerrarSesion()
    {
        session_start();
        session_destroy();
    }

    public function desplegarVista($ruta){
        require_once($ruta);
    }
}
$usuarioControlador = new usuarioControlador();
if(isset($_POST["acceder"]))
{
    // echo "en construcci+on";
    
    $usuarioControlador->verificarLogin();
    //session_start();
    //session_destroy();
    if($_SESSION["idUsuario"] !=0)
    {
        ?>
        <script type="text/javascript">
        $(document).ready(function() {
        Swal.fire({ 
          position: 'center',
          icon: 'success',
          title: 'Usuario Verificado',
          text:'Se ha validado el usuario correctamente',
          showConfirmButton: false,
          timer: 2000,
            }).then(function() {
                // Redirect the user
                window.location.href = "../Vistas/indexAdmin.php";
                })
          });
        </script>   
    <?php
    }
}
elseif(isset($_GET["cerrarSesion"]))
{
    
    //echo "chichipopo";
    $usuarioControlador->cerrarSesion();
    ?>
    <script type="text/javascript">
    $(document).ready(function() {
    Swal.fire({ 
      position: 'center',
      icon: 'info',
      title: 'Sesión cerrada',
      text: 'Se ha cerrado correctamente la sesión',
      showConfirmButton: false,
      timer: 2000,
        }).then(function() {
            // Redirect the user
            window.location.href = "../login.php";
            })
      });
    </script>   
<?php
}
elseif(isset($_GET["registrarUsuario"]))
{
    $usuarioControlador->desplegarVista("../Vistas/registrarUsuario.php");
}
elseif(isset($_POST["registrarUsuario"]))
{
    $usuarioControlador->registrarUsuario();
    $usuarioControlador->desplegarVista("../Vistas/listarUsuario.php");
}
elseif(isset($_GET["listarUsuarios"]))
{
    $usuarioControlador->desplegarVista("../Vistas/listarUsuario.php");
}

?>