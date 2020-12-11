<?php 

class db{
    private static $conexion = null;
    private function __construct(){}

    public static function conectar(){
        $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
        self::$conexion = new PDO('mysql:host=localhost;port=3308;dbname=baseendesarrollo','root','',$pdo_options);
        return self ::$conexion;
    }

    static function cerrarConexion(&$conexion){
        $conexion = null;
    }
}

$db =db::conectar();
?>
