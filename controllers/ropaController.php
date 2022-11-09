<?php
require_once 'route.php';
require_once './models/ropaModel.php';
require_once './models/categoriaModel.php';
require_once './views/ropaView.php';
require_once './libs/libs/Smarty.class.php';
class ropaController
{
    private $modelRopa;
    private $modelCategoria;
    private $viewRopa;
    private $viewLogin;
    private $authHelper;
    public function __construct()
    {
        $this->authHelper = new AuthHelper();
        $this->modelRopa = new ropaModel();
        $this->modelCategoria = new categoriaModel();
        $this->viewRopa = new ropaView();
        $this->viewLogin = new loginView();
    }
    // function mostrarRopaPorCategoria(){
    //     if(!isset($_POST['categoria'])||(empty($_POST['categoria']))){
    //         $this->view->MostrarError();
    //     }
    // $    valor =$_POST['categoria'];
    // }

    public function mostrarHome()
    {
        $productos = $this->modelRopa->traerTabla();
        $categorias = $this->modelCategoria->traerCategoria();
        foreach ($categorias as $categoria) {
            $categoriaTipo[$categoria->id_categoria] = $categoria->tipo;
        }
        $this->viewRopa->mostrarRopa($productos, $categorias, $categoriaTipo);
    }
    public function mostrarProducto($id)
    {
        $producto = $this->modelRopa->obtenerProducto_id($id);
        $this->viewRopa->mostarProducto($producto);
    }
    function mostrarFiltro()
    {
        $filtro = $_POST['categoria'];
        $productos_tipo = $this->modelRopa->obtenerCategoria($filtro);
        $this->viewRopa->mostarfiltro($productos_tipo, $filtro);
    }
    // public function eliminarProducto($i){
    //     $this -> modelUsuario -> borrarProducto($i);
    // }
    public function mostrarAdmin()
    {
        $valor = $this->authHelper->verificarLogeado();
        if ($valor) {
            $productos = $this->modelRopa->traerTabla();
            $categorias = $this->modelCategoria->traerCategoria();
            
            $this->viewRopa->mostarAdmin($productos, $categorias,'');
        } else {
            $this->viewLogin->relocateLogin();
        }
    }
    public function eliminarProducto($id)
    {
        $valor = $this->authHelper->verificarLogeado();
        if ($valor) {
            $this->modelRopa->borrarProducto($id);
            $this->viewRopa->relocateSesion();
        } else {
            $this->viewLogin->relocateLogin();
        }
    }
    public function mostrarEditarProducto($id)
    {
        $valor = $this->authHelper->verificarLogeado();
        if ($valor) {
            $producto = $this->modelRopa->obtenerProducto_id($id);
            $this->viewRopa->mostrarEditProducto($id, $producto);
        } else {
            $this->viewLogin->relocateLogin();
        }
    }
    public function editarProducto($id)
    {
        $valor = $this->authHelper->verificarLogeado();
        if ($valor) {
            if (!empty($_POST['nombre-producto']) && !empty($_POST['descripcion-producto']) ) {
                $nombre = $_POST['nombre-producto'];
                $descripcion = $_POST['descripcion-producto'];
                
                $this->modelRopa->actualizarProducto($nombre, $descripcion,$id);
                $this->viewRopa->relocateSesion();
            }
        } else {
            $this->viewLogin->relocateLogin();
        }
    }
    public function agregarProducto()
    {
        $valor = $this->authHelper->verificarLogeado();
        if ($valor) {
            if (!empty($_POST['nombre-producto']) && !empty($_POST['descripcion-producto']) &&  !empty($_POST['categoria'])) {
                $nombre = $_POST['nombre-producto'];
                $descripcion = $_POST['descripcion-producto'];
                $fk_categoria = $_POST['categoria'];
                $this->modelRopa->agregarProducto($nombre, $descripcion,$fk_categoria);
                $this->viewRopa->relocateSesion();
            }
            $this->viewRopa->relocateSesion();
        }
        $this->viewLogin->relocateLogin();
    }
    public function mostrarEditarCategoria($id)
    {
        $valor = $this->authHelper->verificarLogeado();
        if ($valor) { 
            $categoria = $this -> modelCategoria-> obtenerCategoriaId($id);
            if($categoria){
                //$categorias= $this->modelCategoria->traerCategoria();
                $this->viewRopa->mostrarEditCategoria($id, $categoria);
            }else {
                $mensaje='no se puede';
                $categorias= $this->modelCategoria->traerCategoria();
                $productos = $this->modelRopa-> traerTabla();
                $this->viewRopa->mostarAdmin($productos, $categorias, $mensaje);
            }
            if (!empty($_POST['agregar_categoria'])) {
                $categoria = $_POST['agregar_categoria'];
            }
        } else {
            $this->viewLogin->relocateLogin();
            }
    }
    public function eliminarCategoria($id)
    {
        $valor = $this->authHelper->verificarLogeado();
        if ($valor) {
            
            $existe = $this -> modelRopa -> obtenerRopaCategoriaId($id);
            if($existe){
                $mensaje='no se puede porque esa categoria esta relacioanda a un pro';
                $categorias= $this->modelCategoria->traerCategoria();
                $productos = $this->modelRopa-> traerTabla();
                $this->viewRopa->mostarAdmin($productos, $categorias, $mensaje);
            }else {
                $this->modelCategoria->borrarCategoria($id);
                $this->viewRopa->relocateSesion();
            }
        } else {
            $this->viewRopa->relocateSesion();
        }
    }
    public function editarCategoria($id){
        if ((!empty($_POST['color_categoria']))&&(!empty($_POST['talle_categoria']))&&($_POST['material_categoria'])&&(!empty($_POST['tipo_categoria']))) {
            $color=$_POST['color_categoria'];
            $talle=$_POST['talle_categoria'];
            $material=$_POST['material_categoria'];
            $tipo=$_POST['tipo_categoria'];
            $this -> modelCategoria ->actualizarCategoria($color ,$talle ,$material ,$tipo,$id);
            $this->viewRopa->relocateSesion();
        }
        
    }
    public function agregarCategoria(){
        //$categorias= $this->modelCategoria->traerCategoria();
        //$productos = $this->modelRopa-> traerTabla();
        $valor = $this->authHelper->verificarLogeado();
        if ($valor) {
            if ((!empty($_POST['color_categoria']))&&(!empty($_POST['talle_categoria']))&&($_POST['material_categoria'])&&(!empty($_POST['tipo_categoria']))) {
                $color=$_POST['color_categoria'];
                $talle=$_POST['talle_categoria'];
                $material=$_POST['material_categoria'];
                $tipo=$_POST['tipo_categoria'];
                $this -> modelCategoria -> agregarCategoria($color ,$talle ,$material ,$tipo);
                $this->viewRopa->relocateSesion();
            }else {

                $this->viewRopa->relocateSesion();
            }
        }else {
            $this->viewRopa->relocateSesion();
        }
    }
    public function adminCategoria(){
        $valor = $this->authHelper->verificarLogeado();
        if ($valor) {
            $mensaje="";
            $categorias = $this->modelCategoria->traerCategoria();
            $this -> viewRopa -> mostrarCategoriaAdmin($categorias,$mensaje); 
        } else {
            $this->viewLogin->relocateLogin();
        }
    }
}
