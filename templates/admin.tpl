{include file="headerAdmin.tpl"}
<div class="container contenedor">
    <div class="container-cards">
        {foreach from =$productos item= $producto}
            <div class="card" style="width: 18rem;">
                <img src="{$producto->imagen}" class="card-img-top" alt="...">
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
            
            <label for="exampleInputEmail1" class="form-label">imagen</label>
            <input type="text" name="imagen-producto" class="form-control" aria-describedby="emailHelp">

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
{include file="footer.tpl"}