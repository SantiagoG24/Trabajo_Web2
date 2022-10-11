<?php

class ropaModel{
    private $db;
    public function __construct()
    {
        $this->$db = new PDO('mysql:host=localhost;' . 'dbname=db_catalogo;charset=utf8', 'root', '');
    }
    function traerItems()
    {
        $sentencia = $db->prepare('SELECT * FROM producto');
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    function insertarProducto()
    {

    }
    
}