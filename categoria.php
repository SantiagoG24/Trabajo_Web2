<?php
function traerCategoria($i)
{
    $valor = $_POST['categoria'];
    $db = new PDO('mysql:host=localhost;' . 'dbname=db_catalogo;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM categoria WHERE tipo = echo $valor;');
    $query->execute();
    $productos_tipo = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos_tipo;
}

