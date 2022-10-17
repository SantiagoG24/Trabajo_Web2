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
    public function mostarAdmin($productos, $categorias){
        $this -> smarty -> assign('productos',$productos);
        $this -> smarty -> assign('categorias',$categorias);
        //foreach ($categorias as $categoria) {
        //    var_dump($categoria->id_categoria);    
        //}
        $this -> smarty -> display('./templates/admin.tpl');
    }
    public function mostrarEditProducto($id, $productos){
        $this -> smarty -> assign('id',$id);
        $this -> smarty -> assign('productos',$productos);
        $this -> smarty -> display('./templates/editar.tpl');
    }
    public function mostrarBorrarProducto($id){
        $this -> smarty -> assing('id_producto',$id);
        $this -> smarty -> display('./templates/borrar.tpl');
    }
    public function relocateHome(){
        header("Location:".BASE_URL."home");
    }
    public function relocateSesion(){
        header("Location:".BASE_URL."admin");
    }
    public function relocateRegistro(){
        header("Location:".BASE_URL."registro");
    }

    public function relocateLogin(){
        header("Location:".BASE_URL."login");
    }
}