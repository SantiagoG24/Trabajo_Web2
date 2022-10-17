<?php
require_once 'controllers/ropaController.php';
require_once 'controllers/loginController.php';
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
$ropaController= new ropaController();
$loginController= new loginController();

if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
} else {
    $action = 'home';
};
$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $ropaController->mostrarHome();
        break;
    case 'producto':
        $ropaController->mostrarProducto($params[1]);
        break;
    case 'categoria':
        $ropaController ->mostrarFiltro();
        break;
    case 'login':
        $loginController -> mostrarlogin();
        break;
    case 'registro';
        $loginController -> mostrarRegistro();
        break;  
    case 'mostrarEditarProducto';
        $loginController ->mostrarEditarProducto($params[1]);
        break;
    case 'eliminarProducto';
        $loginController ->eliminarProducto($params[1]);
        break;
    case 'editarProducto';
        $loginController -> editarProducto($params[1]);
        break;
    case 'registrar';
        $loginController -> registrarUsuario();
        break;  
    case 'verificar';
        $loginController -> verificarUsuario();
        break;
    case 'logout';
        $loginController -> DesloguearAdmin();
        break;
        case 'admin';
        $loginController -> mostrarAdmin();
        break;
    case 'agregarProducto';
        $loginController -> agregarProducto();
        break;    
    default:
        echo ('404 Page not found');
        break;
}
