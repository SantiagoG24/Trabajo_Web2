<?php

class ropaModel{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_catalogo;charset=utf8', 'root', '');
    }
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
    public function borrarProducto($id){      
        $query =  $this -> db->prepare('DELETE FROM `producto` WHERE id_producto=?');
        $query->execute([$id]);
    }
    public function actualizarProducto($nombre, $descripcion, $id){
        $query = $this -> db -> prepare("UPDATE producto SET nombre= ? ,descripcion= ? WHERE id_producto=?");
        $query ->execute([$nombre, $descripcion,$id]);
    }
    public function agregarProducto($nombre,$descripcion,$fk_categoria){
        $query = $this -> db -> prepare('INSERT INTO producto(nombre,descripcion, fk_categoria) VALUES (?,?,?)');
        $query -> execute([$nombre, $descripcion, $fk_categoria]);
    }
    public function obtenerRopaCategoriaId($id){
        $query = $this -> db -> prepare('SELECT * FROM producto WHERE fk_categoria =?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
        
        
    }
}