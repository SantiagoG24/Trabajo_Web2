<?php
require_once './libs/libs/Smarty.class.php';
class loginView{
    private $smarty;
    function __construct(){
        $this -> smarty = new Smarty();
        
    }
    
    public function mostrarLogin(){
        $this -> smarty -> display('./templates/login.tpl');
    }
    public function mostrarRegistro(){
        $this -> smarty ->display('./templates/registro.tpl');
    }
    public function relocateRegistro(){
        header("Location:".BASE_URL."registro");
    }
    public function relocateLogin(){
        header("Location:".BASE_URL."login");
    }
    
}