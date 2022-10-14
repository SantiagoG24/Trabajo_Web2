{include file="header.tpl"}
{foreach from =$productos item= $producto} 
    <div class="card" style="width: 18rem;">
                    <img src="{$producto->imagen}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{$producto->nombre}</h5>
                        <p class="card-text">{$producto->descripcion}</p>
                        <a href="eliminar/{$producto->id_producto}">Eliminar producto</a>
                    </div>
                </div>
{/foreach}

<form method="POST" action="editar/">
        <label for="fcategoria">Producto:</label>
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">imagen</label>
    <input type="text" name="imagen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <input type="submit">
    </form>
{include file="footer.tpl"}