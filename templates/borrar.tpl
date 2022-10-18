{include file="header.tpl"}
<h1>Borrar</h1>
<form method="POST" action="BorrarProducto/{$id}">
        <label for="fcategoria">Producto:</label>
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" name="nombre-producto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">descripcion</label>
    <input type="text" name="descripcion-producto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
        <input type="submit">
    </form>
{include file="footer.tpl"}