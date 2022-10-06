<?php
function traerFiltro($i)
{
    $valor = $_GET['valor'];
    $db = new PDO('mysql:host=localhost;' . 'dbname=db_catalogo;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM categoria WHERE tipo = echo $valor;');
    $query->execute();
    $productos_tipo = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos_tipo;
}
function traerItems()
{
    $db = new PDO('mysql:host=localhost;' . 'dbname=db_catalogo;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM producto');
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos;
}
