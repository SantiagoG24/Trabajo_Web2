{include file="header.tpl"}
<div class="card" style="width: 18rem;">
                <img src="{$producto->imagen}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$producto->nombre}</h5>
                    <p class="card-text">{$producto->descripcion}</p>
                    <a href="producto/{$producto->id_producto}">Ver Producto</a>
                </div>
</div>
<a href="home">Volver inicio</a>
{include file="footer.tpl"}