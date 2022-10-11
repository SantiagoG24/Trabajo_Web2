<?php
class ropaModel{
    function traerItems(){
    $db = new PDO('mysql:host=localhost;' . 'dbname=db_catalogo;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM producto');
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos;
    }
}