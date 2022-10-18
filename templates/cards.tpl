{include file="header.tpl"}
<div class="contenedor">
    {foreach from =$productos item= $producto}
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{$producto->nombre}</h5>
                <p class="card-text">{$producto->descripcion}</p>
                <p class="card-text">Tipo: {$categoriaTipo[$producto->fk_categoria]}</p>
                <a href="producto/{$producto->id_producto}">Ver Producto</a>
            </div>
        </div>
    {/foreach}
    <form method="POST" action="categoria/">
        <label for="fcategoria">Categoria:</label>
        <select name="categoria">
            {foreach from =$categorias item= $categoria} {
                <option value="{$categoria->id_categoria}">{$categoria->tipo}</option>
            {/foreach}
        </select>
        <input type="submit">
    </form>
</div>
{include file="footer.tpl"}