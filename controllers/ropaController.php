<?php
require_once 'route.php';
require_once './models/ropaModel.php';
require_once './models/categoriaModel.php';
require_once './views/ropaView.php';
require_once './libs/libs/Smarty.class.php';
class ropaController{
    private $modelRopa;
    private $modelCategoria;
    private $viewRopa;
    public function __construct(){
        $this->modelRopa =new ropaModel();
        $this->modelCategoria =new categoriaModel();
        $this->viewRopa=new ropaView();
    }
    // function mostrarRopaPorCategoria(){
    //     if(!isset($_POST['categoria'])||(empty($_POST['categoria']))){
    //         $this->view->MostrarError();
    //     }
    // $    valor =$_POST['categoria'];
    // }

    function mostrarHome(){
        $productos = $this -> modelRopa -> traerTabla();
        $categoria = $this -> modelCategoria -> traerCategoria();
        $this -> viewRopa -> mostrarRopa($productos ,$categoria);
    }
    function mostrarProducto($id){
        $producto = $this ->modelRopa -> obtenerProducto_id($id);
        $this -> viewRopa -> mostarProducto($producto);
    }
    function mostrarFiltro(){
        $filtro = $_POST['categoria'];
        $productos_tipo = $this -> modelRopa ->obtenerCategoria($filtro);
        $this -> viewRopa -> mostarfiltro($productos_tipo, $filtro);
    }
    public function eliminarProducto($i){
        $this -> modelUsuario -> borrarProducto($i);
    }
}