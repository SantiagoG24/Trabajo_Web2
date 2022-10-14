<?php
require_once 'route.php';
require_once './models/ropaModel.php';
require_once './models/categoriaModel.php';
require_once './views/ropaView.php';
require_once './libs/libs/Smarty.class.php';
class ropaController{
    private $modelRopa;
    private $modelCategoria;
    private $view;
    public function __construct(){
        $this->modelRopa =new ropaModel();
        $this->modelCategoria =new categoriaModel();
        $this->view=new ropaView();
    }
    // function mostrarRopaPorCategoria(){
    //     if(!isset($_POST['categoria'])||(empty($_POST['categoria']))){
    //         $this->view->MostrarError();
    //     }
    // $valor =$_POST['categoria'];
    // }

    function mostrarHome(){
        $productos = $this -> modelRopa -> traerTabla();
        $categoria = $this -> modelCategoria -> traerCategoria();
        $this -> view -> mostrarRopa($productos ,$categoria);
    }
    function mostrarProducto($id){
        $producto = $this ->modelRopa -> obtenerProducto_id($id);
        $this -> view -> mostarProducto($producto);
    }
    function mostrarFiltro(){
        $filtro = $_POST['categoria'];
        $productos_tipo = $this -> modelRopa ->obtenerCategoria($filtro);
        $this -> view -> mostarfiltro($productos_tipo, $filtro);
    }
    function mostrarlogin(){
        $this -> view -> mostrarLogin();
    }
    function verificarLogin(){
        
    }

}