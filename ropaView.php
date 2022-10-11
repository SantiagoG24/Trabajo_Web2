<?php
class ropaView{
    function mostrarRopa($producto){
        echo '
        <div class="card" style="width: 18rem;">
                <img src="<?php echo "$producto->imagen" ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "$producto->nombre" ?></h5>
                    <p class="card-text"><?php echo "$producto->descripcion" ?></p>
                    <a href="producto/<?php echo "$producto->fk_categoria" ?>">Ver Producto</a>
                </div>
            </div>
        ';
    }
    function mostrarError(){
        echo "<h1>error</h1>";
    }
    function mostrarFormFiltro(){
        echo'
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
    </form>';
    }
}
