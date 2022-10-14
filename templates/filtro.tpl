<h1>Filtro:</h1>


{foreach from =$productos item= $producto} {
    <div class="card" style="width: 18rem;">
                    <img src="{$producto->imagen}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{$producto->nombre}</h5>
                        <p class="card-text">{$producto->descripcion}</p>
                        <a href="producto/{$producto->id_categoria}">Ver Producto</a>
                    </div>
                </div>
{/foreach}
<a href="home">Volver inicio</a>