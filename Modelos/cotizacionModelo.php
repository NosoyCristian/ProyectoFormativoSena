<?php 

class cotizacionModelo{

    private $idCotizazcion;
    private $idCliente;
    private $fechadeAlta;
    private $observacion;
    private $observaciondePago;
    private $iva;
    private $estado;


    public function __construct(){}

    public function setIdCotizacion($idCotizazcion){
        $this->idCotizazcion=$idCotizazcion;
    }

    public function getIdCotizacion(){
        return $this->idCotizazcion;
    }

    public function setIdCliente($idCliente){
        $this->idCliente=$idCliente;
    }

    public function getIdCliente(){
        return $this->idCliente;
    }

    public function setFechadeAlta($fechadeAlta){
        $this->fechadeAlta=$fechadeAlta;
    }

    public function getFechadeAlta(){
        return $this->fechadeAlta;
    }

    public function setObservacion($observacion){
        $this->observacion=$observacion;
    }

    public function getObservacion(){
        return $this->observacion;
    }

    public function setObservaciondePago($observaciondePago){
        $this->observaciondePago=$observaciondePago;
    }

    public function getObservaciondePago(){
        return $this->observaciondePago;
    }

    public function setIva($iva){
        $this->iva=$iva;
    }

    public function getIva(){
        return $this->iva;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }

    public function getEstado(){
        return $this->estado;
    }
}
?>