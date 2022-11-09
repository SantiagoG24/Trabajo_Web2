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
    function mostrarRopa($productos, $categorias ,$categoriaTipo){
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->assign('productos',$productos);
        $this->smarty->assign('categoriaTipo',$categoriaTipo);
        $this->smarty->display('./templates/cards.tpl');
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
   public function mostarAdmin($productos, $categorias , $mensaje){
    $this -> smarty -> assign('productos',$productos);
    $this -> smarty -> assign('categorias',$categorias);
    $this -> smarty -> assign('mensaje',$mensaje);
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
    //function mostrarLogin(){
    //   $this -> smarty -> display('./templates/login.tpl');
    //}
    public function mostrarError(){
        $this -> smarty -> display('./templates/admin.tpl');
    }
    public function mostrarEditCategoria($id, $categoria){
        $this -> smarty -> assign('id',$id);
        $this -> smarty -> assign('categoria',$categoria);
        $this -> smarty -> display('./templates/editarCategoria.tpl');
    }
    public function mostrarCategoriaAdmin($categorias,$mensaje){
        $this -> smarty ->  assign('mensaje',$mensaje);
        $this -> smarty -> assign('categorias',$categorias);
        $this -> smarty -> display('./templates/categoriaAdmin.tpl');
    }
}
