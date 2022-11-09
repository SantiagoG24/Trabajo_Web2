{include file="headerCategoriaAdmin.tpl"}
<div class="container contenedor">
    <div class="container-cards">
        <h1>Producto</h1>
        {foreach from =$productos item= $producto}
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{$producto->nombre}</h5>
                    <p class="card-text">{$producto->descripcion}</p>
                    <a href="mostrarEditarProducto/{$producto->id_producto}">Editar producto</a>
                    <a href="eliminarProducto/{$producto->id_producto}">Eliminar producto</a>
                </div>
            </div>
        {/foreach}
    </div>
    <div class="container-form">
        <form method="POST" action="agregarProducto/">
            <label for="fcategoria">Agregar producto:</label>
            <label for="exampleInputEmail1" class="form-label">nombre</label>
            <input type="text" name="nombre-producto" class="form-control" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">descripcion</label>
            <input type="text" name="descripcion-producto" class="form-control" aria-describedby="emailHelp">
            <label for="fcategoria">Categoria:</label>
            <select name="categoria">
                {foreach from =$categorias item= $categoria}
                    <option value="{$categoria->id_categoria}">{$categoria->tipo}</option>
                {/foreach}
            </select>
            <input type="submit">
        </form>
    </div>
</div>
<div class="container">
    <h1>Categoria</h1>
    <form method="POST" action="agregarCategoria/">
        <label for="exampleInputEmail1" class="form-label">Color</label>
        <input type="text" name="color_categoria" class="form-control" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Talle</label>
        <input type="text" name="talle_categoria" class="form-control" aria-describedby="emailHelp">
        <select name="tipo_categoria">
            {foreach from =$categorias item= $categoria}
                <option value="{$categoria->tipo}">{$categoria->tipo}</option>
            {/foreach}
        </select>
        <label for="exampleInputEmail1" class="form-label">material</label>
        <input type="text" name="material_categoria" class="form-control" aria-describedby="emailHelp">
        <input type="submit">
    </form>
    <br>
    <label for="fcategoria">Categorias:</label>

    {if {$mensaje}!==null}
        <p>{$mensaje}</p>
    {/if}

    {foreach from =$categorias item= $categoria}
        <div class="card conteiner">
            <p>color:{$categoria->color}</p>
            <p>talle:{$categoria->talle}</p>
            <p>tipo:{$categoria->tipo}</p>
            <p>material:{$categoria->material}</p>

            <a href="eliminarCategoria/{$categoria->id_categoria}">Eliminar</a>
            <a href="mostrarEditarCategoria/{$categoria->id_categoria}">Editar</a>
        </div>
        <br>
    {/foreach}
    {if {$mensaje}!==null}
        <h1>{$mensaje}</h1>
    {/if}

</div>
{include file="footer.tpl"}