<?php
require_once './libs/libs/Smarty.class.php';
class RopaView{
    private $smarty;
    function __construct(){
        $this -> smarty = new Smarty();
        
    }
    function mostrarHeader(){
        $this -> smarty ->display('./templates/header.tpl');
    }
    function mostrarRopa($productos, $categorias){
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->assign('productos',$productos);
        $this->smarty->display('./templates/cards.tpl');
    }
    function mostrarError(){
        echo "<h1>error</h1>";
    }
    function mostrarfooter(){
        $this->smarty->display('./templates/footer.tpl');
    
    }
    function mostarProducto($producto){
        $this -> smarty-> assign('producto',$producto);
        $this -> smarty-> display('./templates/producto.tpl');
    }
    function mostarfiltro($producto, $filtro){
        $this -> smarty-> assign('productos',$producto);
        $this -> smarty -> assign('filtro',$filtro);
        $this -> smarty-> display('./templates/filtro.tpl');
    }
    function mostrarLogin(){
        $this -> smarty -> display('./templates/login.tpl');
    }
}
