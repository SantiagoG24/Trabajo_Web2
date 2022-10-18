{include file="headerAdmin.tpl"}
<h1>Editar</h1>
<form method="POST" action="editarProducto/{$id}">
        <label for="fcategoria">Editar producto:</label>
        <label for="exampleInputEmail1" class="form-label">nombre</label>
    <input type="text" name="nombre-producto" class="form-control" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">descripcion</label>
    <input type="text" name="descripcion-producto" class="form-control" aria-describedby="emailHelp">
        <input type="submit">
    </form>
    <a href="admin">Volver</a>
{include file="footer.tpl"}