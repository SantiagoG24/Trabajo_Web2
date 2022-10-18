{include file="headerAdmin.tpl"}
<div class="container">
    <h1>Editar</h1>
    <form method="POST" action="editarCategoria/{$id}">
        <label for="fcategoria">Agregar producto:</label>
        <label for="exampleInputEmail1" class="form-label">color</label>
        <input type="text" name="color_categoria" class="form-control" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">talle</label>
        <input type="text" name="talle_categoria" class="form-control" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">material</label>
        <input type="text" name="material_categoria" class="form-control" aria-describedby="emailHelp">

        <label for="fcategoria">tipo:</label>
        <select name="tipo_categoria">
                <option value="{$categoria->tipo}">{$categoria->tipo}</option>
        </select>
        <input type="submit">
    </form>

    <a href="admin">Volver</a>
</div>
{include file="footer.tpl"}