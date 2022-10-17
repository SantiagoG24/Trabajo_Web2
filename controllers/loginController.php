<?php
require_once 'route.php';
require_once './models/ropaModel.php';
require_once './models/categoriaModel.php';
require_once './models/usuarioModel.php';
require_once './Helpers/authHelper.php';
require_once './views/loginView.php';
require_once './libs/libs/Smarty.class.php';
class loginController{
    private $modelUsuario;
    private $viewLogin;
    private $modelRopa;
    private $modelCategoria;
    private $authHelper;
    public function __construct(){
        $this ->authHelper = new AuthHelper();
        $this->modelUsuario =new usuarioModel();
        $this->modelRopa =new ropaModel();
        $this->modelCategoria =new categoriaModel();
        $this->viewLogin =new loginView(); 
    }

    public function mostrarlogin(){
        $valor = $this -> authHelper -> verificarLogeado();
        if ($valor==false) {
            $this -> viewLogin -> mostrarLogin();
        }
        else{
            $this -> viewLogin -> relocateLogin();
        }
    }
    public function DesloguearAdmin(){
        $this -> authHelper -> logout();
        $sesion = $this -> authHelper -> isLoggedIn();
        $this -> viewLogin -> relocateLogin($sesion);
    } 
    public function guardarUsuario(){
        if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])){
            $usuario=$_POST['usuario'];
            $usuarioContraseña=$_POST['contraseña'];
            $this -> modelUsuario -> guardarUsuario($usuario,$usuarioContraseña);
        }

    }
    public function verificarUsuario() {
        $valor = $this -> authHelper -> verificarLogeado();
        if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])){
            $nombreUsuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];
            $usuario = $this->modelUsuario->obtenerUsuarioId($nombreUsuario);
            if ($valor=(!empty($usuario) && password_verify($contraseña, $usuario->contraseña))) {
                session_start();
                $_SESSION['ID__usuario'] = $usuario->id_usuario;
                $_SESSION[ 'nombreUsuario'] = $usuario->usuario;
                $this -> viewLogin -> relocateSesion();
            }else{
                $this -> viewLogin -> relocateLogin();
            }
        }else {
            $this -> viewLogin -> relocateLogin();
        }  
    }
    public function registrarUsuario() {
        $valor = $this -> authHelper -> verificarLogeado();
        if ($valor) {
            $registroUsuario=$_POST['usuario'];
            $registroContraseña=password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
            $resultado= $this -> modelUsuario -> guardarUsuario($registroUsuario, $registroContraseña);
        if ($resultado) {
            $this->viewLogin->mostrarLogin();
        }
        }else {
            $this -> viewLogin -> relocateLogin();
        }
    }
    public function mostrarRegistro(){
        $this -> viewLogin -> mostrarRegistro();
    }
    public function mostrarAdmin(){
        $valor = $this ->authHelper -> verificarLogeado();
        if ($valor) {
            $productos = $this -> modelRopa -> traerTabla();
            $categorias= $this->modelCategoria -> traerCategoria();
            $this -> viewLogin -> mostarAdmin($productos, $categorias);
        }else {
            $this -> viewLogin ->  relocateLogin();
        }
        
    }
    public function eliminarProducto($id){
        $valor = $this -> authHelper -> verificarLogeado();
        if ($valor){
            $this -> modelRopa ->borrarProducto($id);
            $this -> viewLogin -> relocateSesion();
        }else {
            $this -> viewLogin -> relocateLogin();
        }
    }
    public function mostrarEditarProducto($id){
        $valor = $this -> authHelper -> verificarLogeado();
        if ($valor) {
            $producto = $this -> modelRopa -> obtenerProducto_id($id);
            $this -> viewLogin -> mostrarEditProducto($id, $producto);
        }else {
            $this -> viewLogin ->  relocateLogin();
        }
    }
    public function editarProducto($id){
        $valor = $this -> authHelper -> verificarLogeado();
        if ($valor) {
            if (!empty($_POST['nombre-producto']) && !empty($_POST['descripcion-producto']) && !empty($_POST['imagen-producto'])){
                $nombre=$_POST['nombre-producto'];
                $descripcion=$_POST['descripcion-producto'];
                $imagen=$_POST['imagen-producto'];
                $this -> modelRopa->actualizarProducto($nombre, $descripcion, $imagen ,$id);
                $this -> viewLogin -> relocateSesion();
                
            }       
        }else {
            $this -> viewLogin ->  relocateLogin();
        }
        
    }
    public function agregarProducto(){
        $valor = $this -> authHelper -> verificarLogeado();
        if ($valor) {
            if (!empty($_POST['nombre-producto']) && !empty($_POST['descripcion-producto']) && !empty($_POST['imagen-producto']) && !empty($_POST['categoria'])){
                $nombre = $_POST['nombre-producto'];
                $descripcion = $_POST['descripcion-producto'];
                $imagen = $_POST['imagen-producto'];
                $fk_categoria = $_POST['categoria'];
                $this ->modelRopa -> agregarProducto($nombre, $descripcion ,$imagen, $fk_categoria);
                $this -> viewLogin -> relocateSesion();
            }
            $this -> viewLogin -> relocateSesion();
        }
        $this -> viewLogin ->  relocateLogin();
    }
    // public function borrarCategoria($id){        
    //     try {
    //         $this -> modelRopa-> 
    //         $query =  $this -> db->prepare("DELETE INTO 'producto' WHERE id=?");
    //         $query->execute([$id]);
    //     } catch (Exception $e) {
    //         $this -> view -> showError();
    //     }
    // }

}