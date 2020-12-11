<?php 

class productoModelo{

    private $idProducto;
    private $idtipodeProducto;
    private $nombre;
    private $nombreImagen;
    private $fechadeAlta;
    private $descripcion;
    private $precioBase;
    private $estado;
    private $fakeTipo;

    public function __construct(){}

    public function setIdProducto($idProducto){
        $this->idProducto=$idProducto;
    }

    public function getIdProducto(){
        return $this->idProducto;
    }

    public function setIdtipodeProducto($idtipodeProducto){
        $this->idtipodeProducto=$idtipodeProducto;
    }

    public function getIdtipodeProducto(){
        return $this->idtipodeProducto;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombreImagen($nombreImagen){
        $this->nombreImagen=$nombreImagen;
    }

    public function getNombreImagen(){
        return $this->nombreImagen;
    }

    public function setFechadeAlta($fechadeAlta){
        $this->fechadeAlta=$fechadeAlta;
    }

    public function getFechadeAlta(){
        return $this->fechadeAlta;
    }

    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setPrecioBase($precioBase){
        $this->precioBase=$precioBase;
    }

    public function getPrecioBase(){
        return $this->precioBase;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setFakeTipo($fakeTipo){
        $this->fakeTipo=$fakeTipo;
    }

    public function getFakeTipo(){
        return $this->fakeTipo;
    }
}
?>