<?php
class crudCotizacion{
    public function __construct(){}

    public function registrarCotizacion($cotizacion){
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

    
}
?>