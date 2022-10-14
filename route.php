<?php
require_once 'controllers/ropaController.php';
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
$controller= new ropaController();

$action = 'home'; // acción por defecto

if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controller->mostrarHome();
        break;
    case 'producto':
        $controller->mostrarProducto($params[1]);
        break;
    case 'categoria':
        $controller ->mostrarFiltro();
        break;
    case 'login':
        $controller -> mostrarlogin();
        break;  
    // case 'verificar';
    //     $controller -> verificarlogin();
    //     break;
    default:
        echo ('404 Page not found');
        break;
}
