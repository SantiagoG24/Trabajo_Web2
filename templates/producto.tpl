{include file="header.tpl"}
<div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{$producto->nombre}</h5>
                    <p class="card-text">{$producto->descripcion}</p>
                </div>
</div>
<a href="{BASE_URL}home">Volver inicio</a>
{include file="footer.tpl"}