<?php

class ropaModel{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_catalogo;charset=utf8', 'root', '');
    }
    // function connect(){
    //     $db= new  PDO('mysql:host=localhost;' . 'dbname=db_catalogo;charset=utf8', 'root', '');    
    //     return $db;
    // }
    
    function traerTabla()
    {   
        $query = $this -> db->prepare('SELECT * FROM producto');
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    // function obtenerProductoURL(){
    //     $valor = $_POST['categoria'];
    //     return $valor;
    // }
    function obtenerProducto_id($id){
        $query = $this -> db->prepare('SELECT * FROM producto WHERE id_producto=?');
        $query->execute([$id]);
        $producto = $query->fetch(PDO::FETCH_OBJ);
        return $producto;
    }
    function obtenerCategoria($valor){
        $query = $this -> db->prepare('SELECT * FROM producto WHERE fk_categoria =?');
        $query->execute([$valor]);
        $productos_tipo = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos_tipo;
    }
    // function insertarProducto()
    // {

    // }
    
}