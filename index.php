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
    <form method="POST" action="categoria/">
        <label for="fcategoria">Categoria:</label>
        <select name="categoria">
            <option value="buzo">Buzos</option>
            <option value="zapatilla">Zapatillas</option>
            <option value="remera">Remeras</option>
            <option value="pantalones">Pantalones</option>
            <option value="gorra">Gorras</option>
            <option value="accesorio">Accesorios</option>
        </select>
        <input type="submit">
    </form>
    <?php
    require_once "filtro.php";
    $productos=$controler->traerItems();
    foreach ($productos as $producto) {
        $controler->mostrarRopa();
    }
    require_once "templates/footer.html";
}
