{include file="header.tpl"}
<h1>Filtro:</h1>
{foreach from =$productos item= $producto} {
    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{$producto->nombre}</h5>
                        <p class="card-text">{$producto->descripcion}</p>
                    </div>
                </div>
{/foreach}
<a href="home">Volver inicio</a>
{include file="footer.tpl"}