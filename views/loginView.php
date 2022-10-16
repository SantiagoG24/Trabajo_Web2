<?php
require_once './libs/libs/Smarty.class.php';
class LoginView{
    private $smarty;
    function __construct(){
        $this -> smarty = new Smarty();
        
    }
    // function mostarfiltro($producto, $filtro){
    //     $this -> smarty-> assign('productos',$producto);
    //     $this -> smarty -> assign('filtro',$filtro);
    //     $this -> smarty-> display('./templates/filtro.tpl');
    // }
    function mostrarLogin(){
        $this -> smarty -> display('./templates/login.tpl');
    }
}