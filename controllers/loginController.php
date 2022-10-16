<?php
require_once 'route.php';
require_once './models/usuarioModel.php';
require_once './views/loginView.php';
require_once './libs/libs/Smarty.class.php';
class loginController{
    private $modelUsuario;
    // private $modelRopa;
    // private $model;
    private $viewLogin;
    public function __construct(){
        $this->modelUsuario =new UsuarioModel();
        $this->modelRopa =new ropaModel();
        $this->modelCategoria =new categoriaModel();
        $this->viewLogin =new loginView();
    }

    function mostrarlogin(){
        $this -> viewlogin -> mostrarLogin();
    }
    function verificarLogin(){
        $usuario = $_POST['usuario'];
        $contraseña=$_POST ['contraseña'];
        $this -> modelUsuario -> ($usuario, $contraseña);
    }
}
