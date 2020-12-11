<?php 

class detalleCotizacionModelo{

    private $idDetalleCotizacion;
    private $idCotizacion;
    private $idProducto;
    private $cantidad;
    private $precioBase;



    public function __construct(){}

    public function setIdDetalleCotizacion($idDetalleCotizacion){
        $this->idDetalleCotizacion=$idDetalleCotizacion;
    }

    public function getIdDetalleCotizacion(){
        return $this->idDetalleCotizacion;
    }

    public function setIdCotizacion($idCotizacion){
        $this->idCotizacion=$idCotizacion;
    }

    public function getIdCotizacion(){
        return $this->idCotizacion;
    }

    public function setIdProducto($idProducto){
        $this->idProducto=$idProducto;
    }

    public function getIdProducto(){
        return $this->idProducto;
    }

    public function setCantidad($cantidad){
        $this->cantidad=$cantidad;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    public function setPrecioBase($precioBase){
        $this->precioBase=$precioBase;
    }

    public function getPrecioBase(){
        return $this->precioBase;
    }
}
?>