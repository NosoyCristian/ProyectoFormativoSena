<?php
class crudUsuario{
    public function __construct(){}

    public function verificarLogin($usuario){
        //Conectar a la db
        $db =db::conectar();
        $listarUsuario = [];
        //Define la consulta
        $contra =$usuario->getContrasena();
        $sql = $db->prepare('SELECT * FROM usuario WHERE correoElectronico=:correo');
        $sql->bindValue('correo',$usuario->getCorreo());
        //Ejecute la consulta
        $sql->execute();
        $usu = new usuarioModelo();
        if($sql->rowCount() > 0){
            //echo "Existe";
            
            $datosUsuario =$sql->fetch();
            // var_dump($datosUsuario);
            $usu->setContrasena($datosUsuario['contrasena']);
            $hash = $usu->getContrasena();
            //echo $hash." ".$contra;
            if(password_verify($contra, $hash))
            {
                $usu->setIdUsuario($datosUsuario['id']);
                $usu->setNombre($datosUsuario['nombre']);
                $usu->setApellido($datosUsuario['apellido']);
                $usu->setCedula($datosUsuario['cedula']);
                $usu->setCelular($datosUsuario['celular']);
                $usu->setCorreo($datosUsuario['correoElectronico']);
                $usu->setDireccion($datosUsuario['direccion']);
                $usu->setFechaNacimiento($datosUsuario['fechadeNacimiento']);
                $usu->setTipoUsuario($datosUsuario['tipodeUsuario']);
                $usu->setEstado($datosUsuario['estado']);
                $usu->setExiste(1);
            }else
            {
                //echo "No existe";
                $usu->setExiste(0);
            }
        }else
        {
            //echo "No existe";
            $usu->setExiste(0);
        }

        db::cerrarConexion($db); //Llmar el método para cerrar la conexión.
        return $usu; //Retornar el array con objetos.
    }

    public function listarUsuarios(){
        //Conectar a la db
        $db =db::conectar();
        $listarUsuarios = [];
        //Define la consulta
        $sql = $db->query('SELECT u.*, t.nombreUsuario FROM usuario AS u INNER JOIN tipousuario AS t ON (u.tipoUsuario = t.idTipoUsuario)');
        //Ejecute la consulta
        $sql->execute();
        foreach($sql->fetchAll() as $usuario){
            $usu = new usuarioModelo();
            $usu->setIdUsuario($usuario['idUsuario']);
            $usu->setNombre($usuario['nombre']);
            $usu->setApellido($usuario['apellido']);
            $usu->setCedula($usuario['cedula']);
            $usu->setCelular($usuario['celular']);
            $usu->setCorreo($usuario['correo']);
            $usu->setDireccion($usuario['direccion']);
            $usu->setFechaNacimiento($usuario['fechaNacimiento']);
            $usu->setTipoUsuario($usuario['nombreUsuario']);
            $usu->setContrasena($usuario['contrasena']);
            $usu->setEstado($usuario['estado']);
   
            //  echo $usuario['nombres'];
            $listarUsuarios[] = $usu; //Asignar a la lista el objeto.
        }
        db::cerrarConexion($db); //Llmar el método para cerrar la conexión.
        return $listarUsuarios; //Retornar el array con objetos.
    }
    public function listarTipoUsuario(){
        //Conectar a la db
        $db =db::conectar();
        $listarTipoUsuarios = [];
        //Define la consulta
        $sql = $db->query('SELECT * FROM tipousuario');
        //Ejecute la consulta
        $sql->execute();
        foreach($sql->fetchAll() as $tipoUsuario){
            $tip = new tipoUsuarioModelo();
            $tip->setIdUsuario($tipoUsuario['id']);
            $tip->setNombre($tipoUsuario['nombre']);

   
            //  echo $usuario['nombres'];
            $listarTipoUsuarios[] = $tip; //Asignar a la lista el objeto.
        }
        db::cerrarConexion($db); //Llmar el método para cerrar la conexión.
        return $listarTipoUsuarios; //Retornar el array con objetos.
    }


    public function registrarUsuario($usuario){
         $db = db::conectar();
         $sql = $db->prepare('INSERT INTO usuario(idtipodeUsuario,nombre,apellido,cedula,celular,correoElectronico,direccion,fechadeNacimiento,
         contrasena,estado) 
         VALUES(:idtipodeUsuario,:nombre,:apellido,:cedula,:celular,:correo,:direccion,:fechaNacimiento,:contrasena,:estado)');

         $sql->bindValue('idtipodeUsuario',$usuario->getTipoUsuario());
         $sql->bindValue('nombre',$usuario->getNombre());
         $sql->bindValue('apellido',$usuario->getApellido());
         $sql->bindValue('cedula',$usuario->getCedula());
         $sql->bindValue('celular',$usuario->getCelular());
         $sql->bindValue('correo',$usuario->getCorreo());
         $sql->bindValue('direccion',$usuario->getDireccion());
         $sql->bindValue('fechaNacimiento',$usuario->getFechaNacimiento());
         $sql->bindValue('contrasena',$usuario->getContrasena());
         $sql->bindValue('estado',1);

         // var_dump($usuario);
         try{
             $sql->execute();
          }catch(Exception $e){
             echo $e->getMessage();
         }
             die();
         // md5() Función para encriptar
         db::cerrarConexion($db);
     }

    public function editarUsuario($idInsumo){

        //   $db =db::conectar();
        //   $listarInsumos = [];

        //   $sql = $db->query("SELECT * FROM insumo WHERE idInsumo=$idInsumo");

        //   //$sql= $db->bindValue('idInsumo',$idInsumo);

        //   $sql->execute();
        //   foreach($sql->fetchAll() as $insumo){
        //       $in = new insumoModelo();
        //       $in->setIdInsumo($insumo['idInsumo']);
        //       $in->setNombre($insumo['nombre']);
        //       $in->setMedida($insumo['medida']);
        //       $in->setIdMedida($insumo['idMedida']);
     

        //       $listarInsumos[] = $in;
        //   }
        //   db::cerrarConexion($db); 
        //   return $listarInsumos; 
    }

    public function modificarUsuario($insumo){

    //     $db = db::conectar();
    //     $sql = $db->prepare('UPDATE insumo SET nombre=:nombre,medida=:medida,idMedida=:idMedida WHERE idInsumo=:idInsumo');

    //     $sql->bindValue('nombre',$insumo->getNombre());
    //     $sql->bindValue('medida',$insumo->getMedida());
    //     $sql->bindValue('idMedida',$insumo->getIdMedida());
    //     $sql->bindValue('idInsumo',$insumo->getIdInsumo());

    //     var_dump($insumo);
    //     try{
    //         $sql->execute();
    //      }catch(Exception $e){
    //         echo $e->getMessage();
    //         die();
    //     }
    //     // md5() Función para encriptar
    //     db::cerrarConexion($db);
     }

    public function eliminarUsuario($idInsumo)
    {

        // $db = db::conectar();
        // $sql = $db->prepare('DELETE FROM insumo WHERE idInsumo=:idInsumo');

        // $sql->bindValue('idInsumo',$idInsumo);

        // try{
        //     $sql->execute();

        //  }catch(Exception $e)
        //  {
        //     echo $e->getMessage();
        //     die();
        // }
        // db::cerrarConexion($db);

    }
}
?>