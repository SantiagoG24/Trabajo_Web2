<?php
require_once "templates/header.html";
require_once "ropaController.php";
$controler =new ropaController();
function showHome()
{
?>
    <h1>Maxwell's</h1>
    <h2>Productos</h2>
    <h3>Filtro</h3>
    <?php
    require_once "ropaController.php";
    $controler->mostrarFormFiltro();
    require_once "filtro.php";
    $productos=$controler->traerItems();
    foreach ($productos as $producto) {
        $controler->mostrarRopa();
    }
    require_once "templates/footer.html";
}
