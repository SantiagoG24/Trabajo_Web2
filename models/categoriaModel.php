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
    public function borrarCategoria($id){        
        $query =  $this -> db->prepare('DELETE INTO categoria WHERE id=?');
        $query->execute([$id]);
        
    }

}