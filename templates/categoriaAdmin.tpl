{include file="headerAdmin.tpl"}
<label for="fcategoria">Categorias:</label>
<div class="container">
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