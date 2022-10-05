<?php
require_once "templates/header.html";
function showHome()
{
?>
    <h1>Maxwell's</h1>
    <h2>Productos</h2>
    <h3>Filtro</h3>
    <form method="GET" action="filtro/">
        <label for="fcategoria">Categoria:</label>
        <select name="valor">
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
    $productos = traerItems();
    foreach ($productos as $producto) {
    ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo "$producto->imagen" ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo "$producto->nombre" ?></h5>
                <p class="card-text"><?php echo "$producto->descripcion" ?></p>
            </div>
        </div>
<?php
    }
    require_once "templates/footer.html";
}
