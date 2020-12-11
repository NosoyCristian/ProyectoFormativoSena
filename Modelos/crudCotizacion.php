<?php
class crudCotizacion{
    public function __construct(){}

    public function registrarCotizacion($cotizacion){
        $db = db::conectar();
        $idUltimaCotizacion=0;
        $sql = $db->prepare('INSERT INTO cotizacion(idCliente,fechadeAlta,observacion,
        observacionPago,iva,estado) 
        VALUES(:idCliente,NOW(),:observacion,:observacionPago,16,"Solicitud")');

        $sql->bindValue('idCliente',1);
        $sql->bindValue('observacion',$cotizacion->getObservacion());
        $sql->bindValue('observacionPago',$cotizacion->getObservaciondePago());

        // var_dump($usuario);
        try{
            $sql->execute();
            $idUltimaCotizacion = $db->lastInsertId();
        }catch(Exception $e){
            echo $e->getMessage();
        }
        //die();
        // md5() Función para encriptar
        db::cerrarConexion($db);
        return $idUltimaCotizacion;
    }

    public function registrarDetalle($detalleCotizacion){
        $db = db::conectar();
        $idUltimaCotizacion=0;
        $sql = $db->prepare('INSERT INTO detallecotizacion(idCotizacion,idProducto,cantidad,
        precioBase) 
        VALUES(:idCotizacion,:idProducto,:cantidad,:precioBase)');

        $sql->bindValue('idCotizacion',$detalleCotizacion->getIdCotizacion());
        $sql->bindValue('idProducto',$detalleCotizacion->getIdProducto());
        $sql->bindValue('cantidad',$detalleCotizacion->getCantidad());
        $sql->bindValue('precioBase',$detalleCotizacion->getPrecioBase());

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