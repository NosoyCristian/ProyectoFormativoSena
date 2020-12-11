<?php
class crudProducto{
    public function __construct(){}

    public function listarProductos(){
        //Conectar a la db
        $db =db::conectar();
        $listarProductos = [];
        //Define la consulta
        $sql = $db->query('SELECT p.*, t.nombre AS tipo FROM producto AS p JOIN tipoproducto AS t ON (p.idtipodeProducto = t.id)');
        //Ejecute la consulta
        $sql->execute();
        foreach($sql->fetchAll() as $producto){
            $pro = new productoModelo();
            $pro->setIdProducto($producto['id']);
            $pro->setNombre($producto['nombre']);
            $pro->setFakeTipo($producto['tipo']);
            $pro->setFechadeAlta($producto['fechadeAlta']);
            $pro->setDescripcion($producto['descripcion']);
            $pro->setPrecioBase($producto['precioBase']);
            $pro->setEstado($producto['estado']);
            $pro->setNombreImagen($producto['nombreImagen']);
   
            //  echo $usuario['nombres'];
            $listarProductos[] = $pro; //Asignar a la lista el objeto.
        }
        db::cerrarConexion($db); //Llmar el método para cerrar la conexión.
        return $listarProductos; //Retornar el array con objetos.
    }
    public function listarTipodeProducto(){
        //Conectar a la db
        $db =db::conectar();
        $listarTipodeProductos = [];
        //Define la consulta
        $sql = $db->query('SELECT * FROM tipoproducto');
        //Ejecute la consulta
        $sql->execute();
        foreach($sql->fetchAll() as $tipodeProducto){
            $tip = new tipoProductoModelo();
            $tip->setIdProducto($tipodeProducto['id']);
            $tip->setNombre($tipodeProducto['nombre']);

   
            //  echo $usuario['nombres'];
            $listarTipodeProductos[] = $tip; //Asignar a la lista el objeto.
        }
        db::cerrarConexion($db); //Llmar el método para cerrar la conexión.
        return $listarTipodeProductos; //Retornar el array con objetos.
    }


    public function registrarProducto($producto){
        $db = db::conectar();
        $sql = $db->prepare('INSERT INTO producto(idtipodeProducto,nombre,nombreImagen,fechadeAlta,descripcion,precioBase) 
        VALUES(:idtipodeProducto,:nombre,:nombreImagen,:fechadeAlta,:descripcion,:precioBase)');

        $sql->bindValue('idtipodeProducto',$producto->getIdtipodeProducto());
        $sql->bindValue('nombre',$producto->getNombre());
        $sql->bindValue('nombreImagen',$producto->getNombreImagen());
        $sql->bindValue('fechadeAlta',$producto->getFechadeAlta());
        $sql->bindValue('descripcion',$producto->getDescripcion());
        $sql->bindValue('precioBase',$producto->getPrecioBase());

        // var_dump($usuario);
        try{
            $sql->execute();
        }catch(Exception $e){
            echo $e->getMessage();
        }
        //die();
        // md5() Función para encriptar
        db::cerrarConexion($db);
    }

    public function editarProducto($idProducto){

          $db =db::conectar();
          $listarProductos = [];
          $busquedaProducto=[];

          $sql = $db->query("SELECT p.*,t.nombre AS tipo FROM producto as p join tipoproducto as t 
          on (p.idtipodeProducto = t.id) WHERE p.id=$idProducto");

          //$sql= $db->bindValue('idInsumo',$idInsumo);

          $sql->execute();
          foreach($sql->fetchAll() as $producto){
            //   $pro = new productoModelo();
            //   $pro->setNombre($producto['nombre']);
            //   $pro->setDescripcion($producto['descripcion']);
            //   $pro->setPrecioBase($producto['precioBase']);
            $busquedaProducto[0] =$producto['id'];
            $busquedaProducto[1] =$producto['nombre'];
            $busquedaProducto[2] =$producto['descripcion'];
            $busquedaProducto[3] =$producto['precioBase'];
            $busquedaProducto[4] =$producto['tipo'];
            $busquedaProducto[5] =$producto['fechadeAlta'];
            $busquedaProducto[6] =$producto['estado'];
            $busquedaProducto[7] =$producto['nombreImagen'];

     

            //   $listarProductos[] = $pro;
          }
          db::cerrarConexion($db); 
        //   return $listarProductos; 
        return $busquedaProducto; 
    }

    public function modificarProducto($producto){

        $db = db::conectar();
        $sql = $db->prepare('UPDATE producto SET nombre=:nombre,descripcion=:descripcion,precioBase=:precioBase WHERE id=:id');

        $sql->bindValue('nombre',$producto->getNombre());
        $sql->bindValue('descripcion',$producto->getDescripcion());
        $sql->bindValue('precioBase',$producto->getPrecioBase());
        $sql->bindValue('id',$producto->getIdProducto());

        //var_dump($insumo);
        try{
            $sql->execute();
         }catch(Exception $e){
            echo $e->getMessage();
            die();
        }
        // md5() Función para encriptar
        db::cerrarConexion($db);
    }

    public function cambiarEstado($producto){

        $db = db::conectar();
        $sql = $db->prepare('UPDATE producto SET estado=:estado WHERE id=:id');

        $sql->bindValue('estado',$producto->getEstado());
        $sql->bindValue('id',$producto->getIdProducto());

        //var_dump($insumo);
        try{
            $sql->execute();
         }catch(Exception $e){
            echo $e->getMessage();
            die();
        }
        // md5() Función para encriptar
        db::cerrarConexion($db);
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