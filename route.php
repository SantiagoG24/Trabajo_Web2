<?php
require_once 'index.php';
require_once 'categoria.php';
require_once 'producto.php';
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// leemos la accion que viene por parametro
$action = 'home'; // acción por defecto

if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]s
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'producto':
        mostrarProducto($params[1]);
        break;
    case 'categoria':
        traerCategoria($params[1]);
        break;
    default:
        echo ('404 Page not found');
        break;
}
