<?php

class categoriaModel{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_catalogo;charset=utf8', 'root', '');
    }
    function traerCategoria(){
        $query = $this -> db->prepare('SELECT * FROM categoria');
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }
    function obtenerCategoriaId($id){
        $query = $this -> db->prepare('SELECT * FROM categoria WHERE id_categoria =?');
        $query->execute([$id]);
        $categoria = $query->fetch(PDO::FETCH_OBJ);
        return $categoria;
    }
    public function borrarCategoria($id){        
        $query =  $this -> db->prepare('DELETE FROM categoria WHERE id_categoria=?');
        $query->execute([$id]);
    }
    public function actualizarCategoria($color ,$talle ,$tipo,$material ,$id){
        $query = $this -> db -> prepare('UPDATE categoria SET color=?, talle=?, tipo= ?, material=?  WHERE id_categoria=?');
        $query ->execute([$color ,$talle ,$material ,$tipo ,$id]);
    }
    public function agregarCategoria($color ,$talle ,$material ,$tipo){
        $query =$this -> db -> prepare('INSERT INTO categoria(color,talle,material,tipo) VALUES (?,?,?,?)');
        $query ->execute([$color ,$talle ,$material ,$tipo]);
    }



}