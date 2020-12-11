<?php 

class usuarioModelo{

    private $idUsuario;
    private $nombre;
    private $apellido;
    private $cedula;
    private $celular;
    private $correo;
    private $direccion;
    private $fechaNacimiento;
    private $tipoUsuario;
    private $contrasena;
    private $estado;
    private $existe;

    public function __construct(){}

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getApellido(){
        return $this->apellido;
    }
    public function setCedula($cedula){
        $this->cedula = $cedula;
    }

    public function getCedula(){
        return $this->cedula;
    }

    public function setCelular($celular){
        $this->celular = $celular;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setFechaNacimiento($fechaNacimiento){
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }

    public function setTipoUsuario($tipoUsuario){
        $this->tipoUsuario = $tipoUsuario;
    }

    public function getTipoUsuario(){
        return $this->tipoUsuario;
    }

    public function setContrasena($contrasena){
        $this->contrasena = $contrasena;
    }

    public function getContrasena(){
        return $this->contrasena;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setExiste($existe){
        $this->existe = $existe;
    }

    public function getExiste(){
        return $this->existe;
    }


}