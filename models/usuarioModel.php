<?php
class usuarioModel{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_catalogo;charset=utf8', 'root', '');
    }
    public function obtenerUsuarioId($nombreUsuario){
        $query = $this -> db->prepare('SELECT * FROM usuario WHERE usuario=?');
        $query->execute([$nombreUsuario]);
        $usuario = $query->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }
    public function  guardarUsuario($usuario,$usuarioContraseña){   
        $query = $this -> db->prepare('INSERT INTO usuario (usuario, contraseña) VALUES (? , ?)');
        $query->execute([$usuario,$usuarioContraseña]);
        return true;
    }
}   